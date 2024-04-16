<?php

    //Quotation controller
    class Accept extends Controller{
        
        public function index($id){

            $quotation=new Project_Quotation();
            $data=$quotation->getTotalPrice($id);

            $detail=$quotation->getPaymentDetail($id);
            
            $user=new Users();
            $user_data=$user->where("id",Auth::id());

        

            $this->view('AcceptedQuotation',['rows'=>$data,'details'=>$detail,'user'=>$user_data]);
        }

    }
?>