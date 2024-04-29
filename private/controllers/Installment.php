<?php

    class Installment extends Controller{
        
        public function index(){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }

            $installment=new Payments();
            $project_id=Auth::getProjectId();   
            $data=$installment->getDetails($project_id);
            $user=new Users();
            $user_data=$user->where("id",Auth::id());
            $quotation=new Project_Quotation();
            

            $detail=$quotation->getPaymentDetail(Auth::id());

            $nextPay=0;

            foreach($data as $paymetDetails):
                if($paymetDetails->status==="Unpaid"):
                    $nextPay=$paymetDetails->id;
                    break;
                endif;
            endforeach;

            $notification = new Notifications();
            $notification->updateInstallmentNotification($nextPay);
            
            $this->view('ViewInstallment',['rows'=> $data,'user'=>$user_data,'details'=>$detail,]);
        }

        public function installmentPayment($id=null){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }
            
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