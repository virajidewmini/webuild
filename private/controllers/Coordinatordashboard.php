<?php

    //coordinator dashboard controller
    class Coordinatordashboard extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $this->view('coordinatordashboard');
        }

    }
?>