<?php

    //coordinator viewrequest controller
    class Coordinatormaterialrequests extends Controller{
        
        public function index(){
           
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $material_requests=new Material_requests();

            $data=$material_requests->findAll();

            $this->view('coordinatorviewmaterialrequests',['rows'=>$data]);
        }


        public function seemore(){
           
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $material_requests=new Material_requests();

            $data=$material_requests->findAll();

            $this->view('coordinatorviewmaterialrequests',['rows'=>$data]);
        }


        

    }
?>