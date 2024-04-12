<?php

    //coordinator dashboard controller
    class Signup extends Controller{

        public function index(){

            // print_r("Inside ");

            

            if($_SERVER['REQUEST_METHOD']=='POST'){
                
                //to get the previous degree i.e until private
                $prev=(dirname(__DIR__));
                
                // process form
                // sanitize post data
                $_POST= filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                // init data
                $data=[
                    
                    'email'=>trim($_POST['email']),
                   
                    'email_err'=>'',
                   
                ];
    
               
                //validate email
                if(empty($data['email'])){
                    $data['email_err']='Please enter email';      
                }else{
                    $user=new users();
                    if($user->emailtakenvalidation($data['email'])){
                        $data['email_err']='Email is already taken'; 
                    }
                }
              
                
    
                //make sure errors are empty
                if( empty($data['email_err'])  ){
                    $_SESSION['penEmailOfCustomer'] = $data['email'];
                    if($data['email']){
                        // send the email
                        $userEmail = $data['email'];
                        // $mail = new PHPMailer(true);
                        $otp = mt_rand(1000000, 9999999);
                        $timestamp = $_SERVER["REQUEST_TIME"];
                        $_SESSION['time'] = $timestamp;
                        $_SESSION['otp'] = $otp;
                        $_SESSION['user_email'] = $userEmail;
                        $subject="Verify your email";
                        $message="Enter this OTP for verify your email account: $otp .";
                        


                        require("$prev/views/phpmailscript.php");
                        
                        $response = sendMail($userEmail, $subject, $message);
                        $this->redirect('/VerifyEmail');
                        
                        
                    } else{
                            die('Something went wrong');
                        }  
                }else{
                        $this->view('enterEmail',$data);
                    }
             
            
            
        }
        else{
            $data=[
                'first_name'=>'',
                'last_name'=>'',
                'email'=>'',
                'pass'=>'',
                'confirm_pass'=>'',
                'first_name_err'=>'',
                'last_name_err'=>'',
                'email_err'=>'',
                'pass_err'=>'',
                'confirm_pass_err'=>'',
            ];

            $this->view('enterEmail',$data);
        }

    }


    
        public function registerUser(){
            $Email=$_SESSION['penEmailOfCustomer'];
            //code
            $errors = array();
            if (count($_POST)>0){

                $user=new Users();

                if($user->validate($_POST)){

                    //$_POST('email')=$Email;
                    $user->insert($_POST);

                    $this->redirect('login');

                }else{

                    //errors
                    $errors = $user->errors;
                }
            }
            

            $this->view('signup',[
                'errors'=>$errors,
                'Email'=>$Email,
            ]);


        }

    }
?>