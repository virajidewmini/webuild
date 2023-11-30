<?php

    //coordinator dashboard controller
    class Signup extends Controller{
        
        public function index(){

            //code
            $errors = array();
            if (count($_POST)>0){

                $user=new Users();

                if($user->validate($_POST)){

                    $arr['firstname']=$_POST['firstname'];
                    $arr['lastname']=$_POST['lastname'];
                    $arr['nic']=$_POST['nic'];
                    $arr['contactnumber']=$_POST['contactnumber'];
                    $arr['address']=$_POST['address'];
                    $arr['username']=$_POST['username'];
                    $arr['email']=$_POST['email'];
                    $arr['password']=$_POST['password'];

                    //$arr['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);

                    $user->insert($arr);

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