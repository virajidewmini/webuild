<?php

    //coordinator dashboard controller
    class Coordinatordashboard extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $projects= new Projects();
            $data['ongoing'] = $projects -> getOngoingProjectCount();

            $project_requests= new Project_requests();
            $data['project_request_count'] = $project_requests -> getProjectRequestCount();



            $ratings= new Ratings();
            $data['ratings']=$ratings->getRatings();


            $payments= new Payments();
            $data['payments']=$payments->getNearingPayments();
            //get payments which are 1 week due to send waenings
            $data['warning_payments']=$payments->getWarningPayments();
            //get terminate projects or requests
            $data['terminate']=$payments->getOverduePayments(date('Y-m-d'));

            //print_r($data['terminate']);

           $this->view('coordinatordashboard',['rows'=>$data]);
        }



        public function notify($user_id = null,$amount=null,$count=null,$date=null,$payment_id=null,$project_id=null,$project_request_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $notification = new Notifications();

            $row['date'] = date("Y-m-d H:i:s");
            if($count==1){
                $row['message'] = "We have sent you the quotation for your Project Request, ID : ". $project_request_id . " Make sure to accept or reject it before " . $date . " Please Note that it's a company policy that you should pay the first installment before the due date in order to accept the quotaton . Your first installment is Rs : ".$amount;
            }
            else{
                $row['message'] = "Reminder on installement payment: Installemet Number : " . $count ." amount " . $amount . " of the Project, Project ID : ". $project_id ." Make sure to pay before " . $date;
            }
            
            $row['customer_id'] = $user_id;
            $row['type']="installment_reminder";
            $row['status']="Unseen";
            $row['msg_id']=$payment_id;

            $notification->insert($row);

            $notification->setNotifiedStateForPayment($payment_id);

            $this->redirect("coordinatordashboard");
               
                      
        }

        public function warningnotify($user_id = null,$amount=null,$count=null,$date=null,$payment_id=null,$project_id=null,$project_request_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $notification = new Notifications();

            $row['date'] = date("Y-m-d H:i:s");
            if($count==1){
                $row['message'] = "Warning on Accepting/rejecting the quotation for your Project Request, ID : ". $project_request_id . " If you don't accept before " . $date . " by paying the first installment , Rs : ".$amount. " please note that it will be considered as a Rejection of the quotation. ";
            }
            else{
                $row['message'] = "Warning on installement payment: Installemet Number :" . $count ." amount " . $amount . " of the Project, Project ID : ". $project_id . " Make sure to pay before " . $date ."Otherwise the project will be terminated.";
            
            }
            $row['customer_id'] = $user_id;
            $row['type']="installment_reminder";
            $row['status']="Unseen";
            $row['msg_id']=$payment_id;

            $notification->insert($row);

            $notification->setWarningStateForPayment($payment_id);

            $this->redirect("coordinatordashboard");
               
                      
        }


        public function terminationnotify($amount=null,$count=null,$payment_id=null,$project_id=null,$project_request_id=null,$user_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $notification = new Notifications();

            $row['date'] = date("Y-m-d H:i:s");
            if($count==1){
                $row['message'] = "Your Project Request, ID : ". $project_request_id . " has been rejected ";

                $project_requests = new Project_requests();
                $req['status'] = "Rejected";
                $project_requests->update($project_request_id,$req);

                //insert the reason for rejection
                $reason="Customer didn't accept or reject the quotation. Therefore marked as Rejected";
        
                $reject_reason=new Rejected_Project_Requests();
            
                $row1['project_request_id'] = $project_request_id;
                $row1['reason'] = $reason;
               
                $reject_reason->insert($row1);
               
            }
            else{
                $row['message'] = "Your Project, ID : ". $project_id . " has beed terminated due to the failure of paying your installment , number : ".$count."of amount Rs: ". $amount;
                
                $projects = new Projects();
                $req['status'] = "Cancelled";
                $projects->update($project_id,$req);
            };
            $row['customer_id'] = $user_id;
            $row['type']="termination";
            $row['status']="Unseen";
            $row['msg_id']=$payment_id;

            $notification->insert($row);

            $notification->setTerminateStateForPayment($project_id);

            $this->redirect("coordinatordashboard");
               
                      
        }


    }
?>