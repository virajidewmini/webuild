<?php

    //coordinator dashboard controller
    class Signup extends Controller{
        
        public function index(){

            //code
            $errors = array();
            if (count($_POST)>0){

                $user=new Users();

                if($user->validate($_POST)){

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