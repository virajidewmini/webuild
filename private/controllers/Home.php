<?php

//home controller
    class Home extends Controller{

        public function index(){
            //$db = new Database();
            
            $complaints=$this->load_model('C_Complaint');
           // $data = $db->query("select * from complaint");

           $data=$complaints->findAll();
           //$data=$complaints->query("select * from complaint");
            
            
            $this->view('home',['rows'=> $data]);
        }

    }
?>