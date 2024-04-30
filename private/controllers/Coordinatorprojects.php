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


        //for ongoing projects seemore
        public function seemore($project_id= null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            //to change the notification status as seen
            $notification = new Notifications();
            $notification->updateProjectStartNotification($project_id);


            
            //here I've used the same body within project_rquest see more controller.
            //So I have to take the project_request id from the project table which is relavent to that project
            
            $projects=new Projects();
            $id['jj']=$projects->get_project_request_id($project_id)[0];//here id is project_request_id

            $project_requests = new Project_requests();
            $data['common'] = $project_requests->requests($id['jj']->project_request_id)[0];



            //since I use request functions here for status I get the projectrequest status onnly
            $data['status']=$projects->getStatus($project_id)[0];


            
            if(!empty($data['common']->manager_id)){

            $data['manager_details']= $project_requests->managerdetails($id['jj']->project_request_id)[0];
            }

            $data['supervisor_details']= $projects->getsupervisordetails($project_id)[0];


            $kitchen = new Kitchen();
            $bedroom = new Bedroom();
            $bathroom = new Bathroom();
            $dining = new Dining();
            $exterior = new Exterior();
            $living = new Living();
            

            if(!empty($data['common']->modification_id)){
                $data['kitchen_modification_details']=$kitchen->where('modification_id',$data['common']->modification_id) ;
                $data['bedroom_modification_details']=$bedroom->where('modification_id',$data['common']->modification_id) ;
                $data['bathroom_modification_details']=$bathroom->where('modification_id',$data['common']->modification_id) ;
                $data['living_modification_details']=$living->where('modification_id',$data['common']->modification_id) ;
                $data['dining_modification_details']=$dining->where('modification_id',$data['common']->modification_id) ;
                $data['exterior_modification_details']=$exterior->where('modification_id',$data['common']->modification_id) ;
                
                
                
            }

            $model = new Models();

            if(!empty($data['common']->model_id)){

               // $data['model_details']= $model->where('id',$data['common']->model_id) ;
               $data['model_details']=$model->modeldetails($id['jj']->project_request_id)[0];

            }


            $data['customer'] = $project_requests->customer($data['common']->modification_id)[0];
            $data['managers']= $project_requests->find_managers_in_district($data['customer']->ul_district);
            

            $payment_plan=new Payment_plan();
            $data['payment_plan']=$payment_plan->findPaymentPlan($data['common']->payment_plan_id);

            $quotation = new Quotation();
            $data['quotation']=$quotation->getQuotationName($project_id)[0];
            
            $this->view('coordinatorongoingprojects.seemore',['rows'=>$data]);
            
               
                      
        }

        public function ongoing(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $projects=new Projects();

            $data=$projects->OngoingProjects();

            $this->view('coordinatorviewongoingprojects',['rows'=>$data]);
        }

        public function completed(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $projects=new Projects();

            $data=$projects->CompletedProjects();

            $this->view('coordinatorviewongoingprojects',['rows'=>$data]);
        }

        public function cancelled(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $projects=new Projects();

            $data=$projects->CancelledProjects();

            $this->view('coordinatorviewongoingprojects',['rows'=>$data]);
        }

        
        
        public function notifyend($project_id=null,$user_id=null){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $notification = new Notifications();

            $row['date'] = date("Y-m-d H:i:s");
            $row['message'] = "We have compeleted your Project , ID : ". $project_id ." Hope You had a great experience. Good Luck ! ";
            $row['customer_id'] = $user_id;
            $row['type']="projectend";
            $row['status']="Unseen";
            $row['msg_id']=$project_id;

            $notification->insert($row);

            $projects = new Projects();
            $req['status'] = "Notified";
            
            $projects->update($project_id,$req);

            //$this->redirect('coordinatorprojects/completed');
        }

    }
?>