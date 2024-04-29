<?php

    //coordinator viewrequest controller
    class Coordinatorrequests extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $project_requests=new Project_requests();

            $data['Pending']=$project_requests->findAllRequests();
            $data['Accepted']=$project_requests->findAllAcceptedRequests();
            $data['Done']=$project_requests->findAllDoneRequests();
           
            // $quotation = new Quotation();
            // $project_id=$quotation->getProjectId($id)[0]->id;
            // $data['first_installement_status']=$quotation-> getFirstInstallmentStatu($project_id)[0];
            // print_r($data['first_installement_status']);

            $this->view('coordinatorrequests',['rows'=>$data]);
        }


        public function seemore($id = null,$flag=null){
		
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            //to change the notification status as seen
            $notification = new Notifications();
            $notification->updateProjectRequestNotification($id);

            $project_requests = new Project_requests();
            // print_r($id."this is ");
            $data['common'] = $project_requests->requests($id)[0];
            // print_r($data['common'] );
            
            if(!empty($data['common']->manager_id)){

            $data['manager_details']= $project_requests->managerdetails($id)[0];
            }


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
               $data['model_details']=$model->modeldetails($id)[0];

            }
// print_r("blah1");
            // print_r($data['common']->modification_id);
            // print_r("blah2");
            $data['customer'] = $project_requests->customer($data['common']->modification_id)[0];
            $data['managers']= $project_requests->find_managers_in_district($data['customer']->ul_district);
            
           
            
            // if(strcmp($data['common']->land_type,"customer")==0){
            //     $data['customer'] = $project_requests->customer($id)[0];
            //     $data['managers']= $project_requests->find_managers_in_district($data['customer']->ul_district);
            // }
            // else{
            //     $data['company'] = $project_requests->company($id)[0];
            //     $data['managers']= $project_requests->find_managers_in_district($data['company']->district);
            // }
            

            $payment_plan=new Payment_plan();
            $data['payment_plan']=$payment_plan->findPaymentPlan($data['common']->payment_plan_id);

            $data['common'] ->id=$id;
            if($flag !== null){
                
                $this->view('coordinatorrequests.searchmanager',['rows'=>$data]);
            }
            else{
                 //get attachments
                $data['salary'] = $project_requests->getSalary($data['common']->modification_id)[0];
                $data['landphoto'] = $project_requests->getLandPhoto($data['common']->modification_id)[0];
                $data['blockplan'] = $project_requests->getBlockPlan($data['common']->modification_id)[0];

                if($data["common"]->status == 'Rejected'){
                    $data['reject_reason']=$project_requests->getRejectReason($id)[0];
                    //print_r($data['reject_reason'] );
                }

                if($data['common']->status=='Done'){
                    $quotation = new Quotation();
                    $project_id=$quotation->getProjectId($id)[0]->id;
                    //print_r($project_id);
                    $data['quotation']=$quotation->getQuotationName($project_id)[0];
                }

                $this->view('coordinatorrequests.seemore',['rows'=>$data]);
            }


           
	    }
    


        public function addmanager($id=null,$manager_id=null,$manager_fname=null,$manager_lname=null){
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }


            $project_requests=new Project_requests();
           
            $row = $project_requests->where('id',$id);
            
            $this->view('coordinatorrequests.addmanager',[
                'row'=>$row,
                'manager_id'=>$manager_id,
                'manager_fname'=>$manager_fname,
                'manager_lname'=>$manager_lname,
            ]);

            


        }
        
        public function updateRequestStatusANDIncrementProjectCount($request_id=null,$manager_id=null){
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }


            $project_requests=new Project_requests();
            $staff=new Staffs();
            $notification=new Notifications();

            $errors=array();        
            if (count($_POST)>0){
                

                $project_requests->update($request_id,$_POST);

                $current=$staff->getProjectCount($manager_id);
               
                $projectcount['project_count']=$current[0]->project_count+1;
                $staff->update($manager_id,$projectcount);

                $row['date']=date("Y-m-d H:i:s");
                $row['staff_id']=$manager_id;
                $row['message']="You are assigned for the project request".$request_id;
                $row['status']="Unseen";
                $row['type']="project_request_pm";
                $row['msg_id']=$request_id;

                $notification->insert($row);


                $this->redirect('coordinatorrequests');

                
            }

        }

        //for rejected requests
        public function rejectedrequests(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $project_requests=new Project_requests();

            $data=$project_requests->findAllRejectedRequests();

            $this->view('coordinatorrejectedrequests',['rows'=>$data]);
        }

        //accept or reject
        public function reject($request_id=null,$user_id=null){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $project_requests=new Project_requests();
            
            $req['status'] = "Rejected";
            $project_requests->update($request_id,$req);

            //get the reason for rejection
            if (count($_POST)>0){
                //print_r($_POST['reject_reason']);
                $reason=$_POST['reject_reason'];
            }



            //insert the reason for rejection
            $reject_reason=new Rejected_Project_Requests();
            
            $row['project_request_id'] = $request_id;
            $row['reason'] = $_POST['reject_reason'];

            $reject_reason->insert($row);
            


            //notify customer of rejection
            $notification = new Notifications();

            $row1['date'] = date("Y-m-d H:i:s");
            $row1['message'] = "Your Project Request of ID :" .$request_id." is Rejected due to " . $reason ;
            $row1['customer_id'] = $user_id;
            $row1['type']="pr_reject_co";
            $row1['status']="Unseen";
            $row1['msg_id']=$request_id;

            $notification->insert($row1);

            $this->redirect('coordinatorrequests');
        }





        public function accept($request_id=null,$user_id=null){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $project_requests=new Project_requests();
            
            $req['status'] = "Accepted";
            $project_requests->update($request_id,$req);


            //notify customer of rejection
            $notification = new Notifications();

            $row1['date'] = date("Y-m-d H:i:s");
            $row1['message'] = "Your Project Request of ID :" .$request_id." is Accepted " ;
            $row1['customer_id'] = $user_id;
            $row1['type']="pr_accept_co";
            $row1['status']="Unseen";
            $row1['msg_id']=$request_id;

            $notification->insert($row1);

            $this->redirect('coordinatorrequests');
        }

        //for the analysis getting all requests
        public function getALLRequests($year=null){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $project_requests = new Project_requests();

            if(isset($_POST['year'])){    
                $data['all_project_requests']=$project_requests->findAllRequestsInYear($_POST['year']);        
                $data['all_requests_count']=$project_requests->findAllRequestsCountInYear($_POST['year']);
                $data['rejected_requests_count']=$project_requests->findAllRejectedRequestsCountInYear($_POST['year']);
                $data['year']=$_POST['year'];
            }
            else{
                $data['all_project_requests']=$project_requests->findAllRequestsInYear(date('Y'));
                $data['all_requests_count']=$project_requests->findAllRequestsCountInYear(date('Y'));
                $data['rejected_requests_count']=$project_requests->findAllRejectedRequestsCountInYear(date('Y'));
                $data['year']=date('Y');
            }

            $data['most_selected_model_details']=$project_requests->getMostSelectedModelID($data['year'])[0];
            

            //print_r($data['all_project_requests']);
           $this->view('coordinatorrequests.all',['rows'=>$data]);
        }
    }
?>