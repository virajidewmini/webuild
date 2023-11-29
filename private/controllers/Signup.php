<?php

    //coordinator dashboard controller
    class Signup extends Controller{
        
        public function index(){

            //code

            echo "<pre>";
            print_r($_POST);
            $this->view('signup');
        }

    }
?>