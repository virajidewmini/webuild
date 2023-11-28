<?php

//hProjectprofile controller
    class Projectprofile extends Controller{

        public function index(){
            //$db = new Database(); -- VIraji
            $profiles=new P_Profile();
            //$complaints=$this->load_model('C_Complaint');-- Me
           // $data = $db->query("select * from complaint"); Viraji

           $data=$profiles->findAll();
           //$data=$complaints->query("select * from complaint");-- VIraji
            
            
            $this->view('projectprofile',['rows'=> $data]);
        }

    }
?>
