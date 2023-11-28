<?php

//home controller
    class Home extends Controller{

        public function index(){
            //$db = new Database(); -- VIraji
            $complaints=new C_Complaint;
            //$complaints=$this->load_model('C_Complaint');-- Me
           // $data = $db->query("select * from complaint"); Viraji

           $data=$complaints->findAll();
           //$data=$complaints->query("select * from complaint");-- VIraji
            
            
            $this->view('home',['rows'=> $data]);
        }

    }
?>