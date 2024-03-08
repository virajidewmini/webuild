<?php

    //coordinator dashboard controller
    class Forgetpassword extends Controller{
        
        public function index() {
           
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                $prev=(dirname(__DIR__));

                // process form
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                //init data
                $data = [
                    'email' => trim($_POST['email']),
                    'email_err' => '',
                ];
                //validate email
                if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['email_err'] = 'Please enter a valid email';
                    $this->view('forgetpassword.getemail', $data); // Pass $data to the view
                    exit; // Ensure no further processing after redirection
                }
        
                //check for user/email
                $user=new users();
                if ($user->emailtakenvalidation($data['email'])) {
                    //user found
                } else {
                    $data['email_err'] = 'Email not found. Please enter a valid email address';
                    $this->view('forgetpassword.getemail', $data); // Pass $data to the view
                    exit; // Ensure no further processing after redirection
                }
        
                //make sure errors are empty
                if (empty($data['email_err'])) {
                    $userEmail = $data['email'];

                    $otp = mt_rand(100000, 999999);

                    $timestamp = $_SERVER["REQUEST_TIME"];


                    $_SESSION['time'] = $timestamp;
                    $_SESSION['otp'] = $otp;
                    $_SESSION['user_email'] = $userEmail;
                    
                    try {
                        $subject="Verify your email";
                        $message="Enter this OTP for verify your email account: $otp .";
                        


                        require("$prev/views/phpmailscript.php");
                        
                        $response = sendMail($userEmail, $subject, $message);
                        $this->redirect('/VerifyEmailForForgetPassword');
                        
                    } catch (Exception $e) {
                        error_log('Email sending failed: ' . $e->getMessage());
                        $data['email_err'] = 'Something went wrong. Please try again later.';
                        $this->view('forgetpassword.getemail', $data); // Pass $data to the view
                        exit; // Ensure no further processing after redirection
                    }
                }
            } else {
                
                $data = [
                    'email' => '',
                    'email_err' => '',
                ];
                
                $this->view('forgetpassword.getemail', $data);
            }
        }




        //updatePassword
        public function updatePassword(){
            
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'user_id' => $user_id,
                    'pass' => trim($_POST['pass']),
                    'confirm_pass' => trim($_POST['confirm_pass']),
                    'pass_err' => '',
                    'confirm_pass_err' => '',
                ];
        
                // Validate password  
                
                
        
                // If no errors, proceed with updating the password
                if (empty($data['pass_err']) && empty($data['confirm_pass_err'])) {
                    // Get user ID based on the email
                    $user = $this->userModel->findUserById($user_id);
                    $user_role=$user[0]->user_role;
                    
                    if ($user) {
                        // Hash the password
                        
                        $data['pass']=password_hash($data['pass'],PASSWORD_DEFAULT);
                        // Update the user's password
                        if ($this->userModel->updatePassword($data)) {
                            if($user_role=='publisher'){
                                if($this->userModel->updatePasswordPub($data)){
                                    redirect('landing/login');
                                }else {
                                    die('Something went wrong');
                                }
                            }else if($user_role=='customer'){
                                if($this->userModel->updatePasswordCus($data)){
                                    redirect('landing/login');
                                }else {
                                    die('Something went wrong');
                                }
                            }else if($user_role=='charity'){
                                if($this->userModel->updatePasswordCharity($data)){
                                    redirect('landing/login');
                                }else {
                                    die('Something went wrong');
                                }
                            }
                            
                        } else {
                            die('Something went wrong');
                        }
                    } else {
                        // User not found
                        die('User not found');
                    }
                } else {
                    // There were errors, reload the view with error messages
                    $this->view('landing/updatepass', $data);
                }
            } 
            else {
                // $userEmail=$_SESSION['user_email'] ;
                // GET request, load the view
                $data = [
                    'user_id' => $user_id,
                    'pass' => '',
                    'confirm_pass' => '',
                    'pass_err' => '',
                    'confirm_pass_err' => '',
                ];
        
                $this->view('updatePassword', $data);
            }
        }
            
        
    }
?>