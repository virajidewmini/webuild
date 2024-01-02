<?php

    //Quotation controller
    class Quotation extends Controller{
        
        public function index(){

            $quotation= new Project_Quotation();
            $data=$quotation->where("user_id","1");

            $this->view('ViewQuotation',["rows"=>$data]);
        }

    }
?>