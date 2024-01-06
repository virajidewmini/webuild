<?php

    //coordinator dashboard controller
    class Coordinatorviewmanaers extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $view_managers=new View_Managers();

            $data=$view_managers->seeAllManagers();

            $this->view('coordinatorviewmanagers',['rows'=>$data]);
            
        }

    }
?>