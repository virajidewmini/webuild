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
            //print_r($_SESSION['user_email']);
            $errors = array();
            
            if (count($_POST)>0){
                //print_r($_POST);

                $user=new Users();

                if($user->passwordvalidation($_POST)){
                    $data=$user->getIdByEmail($_SESSION['user_email']);
                    
                    $id=$data[0]->id;
                    
                    $arr['password']=$_POST['password'];
                    
                    
                    $user->update($id,$arr);
                    $this->redirect('/Login');

                }else{
                    

                    //errors
                    $errors = $user->errors;
                    
                    
                }
            }
            

            $this->view('updatePassword',[
                'errors'=>$errors,
                
            ]);


        }
        
            
            
        
    }
?>