<?php

    class Installment extends Controller{
        
        public function index(){

            $installment=new Payments();
            $project_id=Auth::getProjectId();   
            $data=$installment->getDetails($project_id);
            $user=new Users();
            $user_data=$user->where("id",Auth::id());
            $quotation=new Project_Quotation();
            

            $detail=$quotation->getPaymentDetail(Auth::id());
            
            $this->view('ViewInstallment',['rows'=> $data,'user'=>$user_data,'details'=>$detail,]);
        }

        public function installmentPayment($id=null){
            $pay=new payments();
            $quotation=new Project_Quotation();
            $data=$quotation->getTotalPrice(Auth::getProjectId());

            $detail=$pay->getInstallmentDetail($id);
            
            $user=new Users();
            $user_data=$user->where("id",Auth::id());
            $this->view('ViewInstallmentDetail',['rows'=>$data,'details'=>$detail,'user'=>$user_data]);
        }

    }
?>