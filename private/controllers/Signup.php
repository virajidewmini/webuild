<?php

    //coordinator dashboard controller
    class Signup extends Controller{
        
        public function index(){

            //code
            echo "<pre>";
                    print_r($_POST);
            $errors = array();
            if (count($_POST)>0){

                $user=new Users();

                
                
                
                if($user->validate($_POST)){

                    // echo "<pre>";
                    // print_r($_POST);

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

    }
?>