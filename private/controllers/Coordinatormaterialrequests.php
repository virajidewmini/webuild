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

        public function emailsupplier($supplier,$email,$material,$quantity,$reqID){
           
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $data["supplier"]=$supplier;
            $data["email"]=$email;
            $data["subject"]="Requesting $quantity $material";
            $data["message"]="We, webuild.pvt request $quantity $material as soon as possible \nThankyou.";
            $data["reqID"]=$reqID;

            
          //$this->view('coordinatorviewmaterialrequests.emailsupplier');
            $this->view('coordinatorviewmaterialrequests.emailsupplier',['rows'=>$data]);
        }
        
        public function changeStatus($id = null){
           
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $material_requests=new Material_requests();

            
            $_POST['status'] = "Emailed";
            $material_requests->update($id,$_POST);

            $data=$material_requests->findAll();
            
            $this->view('coordinatorviewmaterialrequests',['rows'=>$data]);
        }

        public function changeStatusToRecieved($id = null){
           
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $material_requests=new Material_requests();

            
            $_POST['status'] = "Recieved";
            $material_requests->update($id,$_POST);

            $data=$material_requests->findAll();
            
            $this->view('coordinatorviewmaterialrequests',['rows'=>$data]);
        }

    }
?>