<?php

    //coordinator dashboard controller
    class Login extends Controller{
        
        public function index(){

            //code
            $errors = array();

            if (count($_POST)>0){

                $user=new Users();
                if($row=$user->where('username',$_POST['email'])){

                    Auth::authenticate($row);
                    $this->reidrect('/home');
                }else{
                    $errors['username']="Wrong username or password";




                }
            }

            $this->view('login',[
                'errors'=>$errors,
            ]);
        }

    }
?>