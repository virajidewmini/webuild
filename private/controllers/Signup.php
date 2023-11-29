<?php

    //coordinator dashboard controller
    class Signup extends Controller{
        
        public function index(){

            //code

            if (count($_POST)>0){
                
            }
            print_r($_POST);
            $this->view('signup');
        }

    }
?>