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

            $this->view('coordinatordashboard',['rows'=>$data]);
        }



        public function notify($user_id = null,$amount=null,$count=null,$date=null,$payment_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $notification = new Notifications();

            $row['date'] = date("Y-m-d H:i:s");
            $row['message'] = "Reminder on installement payment: Installemet Number :" . $count ." amount " . $amount ." Make sure to pay before " . $date;
            $row['customer_id'] = $user_id;
            $row['type']="installment_reminder";
            $row['status']="Unseen";
            $row['msg_id']=$payment_id;

            $notification->insert($row);

            $notification->setStateForPayment($payment_id);

            $this->redirect("coordinatordashboard");
               
                      
        }

        public function warningnotify($user_id = null,$amount=null,$count=null,$date=null,$payment_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $notification = new Notifications();

            $row['date'] = date("Y-m-d H:i:s");
            $row['message'] = "Warning on installement payment: Installemet Number :" . $count ." amount " . $amount ." Make sure to pay before " . $date ."Otherwise the project will be freezed.";
            $row['customer_id'] = $user_id;
            $row['type']="installment_reminder";
            $row['status']="Unseen";
            $row['msg_id']=$payment_id;

            $notification->insert($row);

            $notification->setStateForPayment($payment_id);

            $this->redirect("coordinatordashboard");
               
                      
        }


    }
?>