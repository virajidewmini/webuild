<?php

    //coordinator viewquotation controller
    class Coordinatorprojects extends Controller{
        
        //this is for ongoing projects
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $ongoing_projects=new Projects();

            $data=$ongoing_projects->getOngoingProjects();

            $this->view('coordinatorongoingprojects',['rows'=>$data]);
        }



        public function viewpayments($project_id= null,$payment_plan_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $payments=new Payments();
            $quotation=new Quotation();

            $data['installemets']=$payments->getAllInstallments($project_id);
            $data['project_id']=$project_id;
            $data['total_amount']=$quotation->getTotalAmount($project_id)[0];
            $data['remaining_amount']=$payments->getRemainingUnpaidTotal($project_id)[0];
            $data['payment_plan']=$payments->getPaymentPlan($payment_plan_id)[0];
            $data['payment_installments']=$payments->getPaymentPlanInstallments($payment_plan_id);

            $this->view('coordinatorviewpayment',['rows'=>$data]);
            
               
                      
        }


    }
?>