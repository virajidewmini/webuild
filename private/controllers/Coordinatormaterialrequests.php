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


        public function seemore($id = null){
           
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $material_requests=new Material_requests();

            $data['common']=$material_requests->where('id',$id)[0];
            $data['supplier']=$material_requests->getSupplierDetails($data['common']->material->material_name)[0];

            $this->view('coordinatorviewmaterialrequests.seemore',['rows'=>$data]);
        }


        

    }
?>