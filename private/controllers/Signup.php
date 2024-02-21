<?php

    //coordinator dashboard controller
    class Signup extends Controller{
        
        public function index(){

            $errors = array();
            if (count($_POST)>0){

                $user=new Users();

                
                
                
                if($user->validate($_POST)){


                    $user->insert($_POST);

                    $this->redirect('login');


                }else{

                    //errors
                    $errors = $user->errors;
                }
            }

            $this->view('signup',[
                'errors'=>$errors
            ]);


        }



        // public function sendotp(){




        // }

    }
?>

