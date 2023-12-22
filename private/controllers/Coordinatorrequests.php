<?php

    //coordinator viewrequest controller
    class Coordinatorrequests extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $project_requests=new Project_requests();

            $data=$project_requests->findAll();

            $this->view('coordinatorrequests',['rows'=>$data]);
        }

    }
?>