<?php

    //coordinator ViewComplaints
    class Coordinatorviewcomplaints extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();

            if(isset($_POST['complaint_type'])){
                $complaint_type = $_POST['complaint_type'];

                if($complaint_type=='Quality and the number of the photograph'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPendingPhotographComplaints();
                }
                elseif($complaint_type=='Construction project delay '){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPendingBeingDelayedComplaints();
                }
                elseif($complaint_type=='Other'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPendingOtherComplaints();
                }
                elseif($complaint_type=='Poor Communication'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPendingPoorCommunicationComplaints();
                }
                elseif($complaint_type=='Quality of workmanship and materials'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPendingWorkmanshipAndMaterialsComplaints();
                };

                
            }
            else{
                $data['complaint_type']="Quality and the number of the photograph";
                $data['complaints']=$complaint->getPendingPhotographComplaints();
            }
            
            

            
            $this->view('coordinatorcomplaints.pending',['rows'=>$data]);
            
        }


        public function seemore($id = null){
            // print_r("blah");
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();
            $data=$complaint->viewComplanitDetail($id);

            $attachments=new Attachment();
            $data['attachments']=$attachments->getComplaintaAttachments($id);
            // print_r($data['attachments']);

            //to change the notification status as seen
            $notification = new Notifications();

            $notification->updateComplaintNotification($id);



            $this->view('coordinatorcomplaints.seemore',['row'=>$data]);
            
        }

        public function addremark($id = null){
            
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();
   
            if (count($_POST)>0){

                //for poor comm and other complaints only
                if(!($_POST['remark']==NULL)  && ($_POST['type'] == "Other"   ||  $_POST['type']=="Poor Communication") ){
                   
                    $_POST['status'] = "Handled";
                    // print_r($_POST);
                }
                $complaint->update($id,$_POST);

                //notifying customer since now the complaint of these types are handled
                $notification = new Notifications();
                $user_id=$notification->getCUstomerIDforNotifyHandledComplaints($id)[0]->user_id;
                //print_r($user_id);

                $row['date'] = date("Y-m-d H:i:s");
                $row['message'] = "Your Complaint of ID : " . $id . " is now HANDLED. We are extremely sorry for the inconvenience caused.";
                $row['customer_id'] = $user_id;
                $row['type']="complaint";
                $row['status']="Unseen";
                $row['msg_id']=$id;

                $notification->insert($row);

                $this->redirect("coordinatorviewcomplaints/seemore/$id");   
                //$this->redirect("coordinatorprojects/viewpayments/$project_details->project_id/$project_details->payment_package_id");              
            }
            $row = $complaint->where('id',$id);
            $this->view('coordinatorviewcomplaints.addremark',[
                'row'=>$row,
            ]);
            
        }

        public function notify($id = null,$complaint_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $notification = new Notifications();

           

            if (count($_POST)>0){

                $row['date'] = date("Y-m-d H:i:s");
                $row['message'] = "Client complaint on project id " . $_POST['project_id'] ." for " . $_POST['type'];
                
                $staff_id= $notification->getStaffID($_POST['project_id'],$_POST['type']);

                if($_POST['type']=="Quality of photograph"|| $_POST['type']=="Quality of workmanship and materials" ){
                    $row['staff_id'] = $staff_id[0]->supervisor_id;
                }
                if($_POST['type']=="Construction project delay "){
                    $row['staff_id'] = $staff_id[0]->manager_id;
                }

                $notification->insert($row);


                //updating complaint status
                $notification->setState($complaint_id);
                //print_r($complaint_id);
                $this->redirect("coordinatorviewcomplaints/seemore/$complaint_id");
               
            }            
        }

        //for complete complaints to change status to handled and notify customer.
        public function notifyCustomer($id = null,$complaint_id=null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $complaint = new C_Complaint();
            
            $_ARRAY['status']="Handled";
            $complaint->update($complaint_id,$_ARRAY);
        
            //notifying customer since now the complaint of these types are handled
            $notification = new Notifications();
            $user_id=$notification->getCUstomerIDforNotifyHandledComplaints($complaint_id)[0]->user_id;
            //print_r($user_id);

            $row['date'] = date("Y-m-d H:i:s");
            $row['message'] = "Your Complaint of ID : " . $complaint_id . " is now HANDLED. We are extremely sorry for the inconvenience caused.";
            $row['customer_id'] = $user_id;
            $row['type']="complaint";
            $row['status']="Unseen";
            $row['msg_id']=$id;

            $notification->insert($row);

            $this->redirect("coordinatorviewcomplaints/seemore/$complaint_id");
               
             
        }

        //view past compalints
        public function past(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();

            if(isset($_POST['complaint_type'])){
                $complaint_type = $_POST['complaint_type'];

                if($complaint_type=='Quality and the number of the photograph'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPastPhotographComplaints();
                }
                elseif($complaint_type=='Construction project delay '){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPastBeingDelayedComplaints();
                }
                elseif($complaint_type=='Other'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPastOtherComplaints();
                }
                elseif($complaint_type=='Poor Communication'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPastPoorCommunicationComplaints();
                }
                elseif($complaint_type=='Quality of workmanship and materials'){
                    $data['complaint_type']=$complaint_type;
                    $data['complaints']=$complaint->getPastWorkmanshipAndMaterialsComplaints();
                };

                
            }
            else{
                $data['complaint_type']="Quality and the number of the photograph";
                $data['complaints']=$complaint->getPastPhotographComplaints();
            }
            
            $this->view('coordinatorcomplaints.past',['rows'=>$data]);
            
        }
        
       
    }
?>