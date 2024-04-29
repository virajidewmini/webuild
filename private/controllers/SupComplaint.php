<?php 
    class SupComplaint extends Controller{

        public function index(){
            
            if (!Auth::logged_in()) {
                $this->redirect('/staff_login');
            }    
                $Complaint=new Notifications();
                $user_id=Auth::id();
                
                
                $data=$Complaint->getSupervisorComplaint($user_id);
                $this->view('AllSupervisorComplaint',['rows'=> $data]);
        }

        public function viewComplaint($id=null){
            if (!Auth::logged_in()) {
                $this->redirect('/staff_login');
            }
            
                $clientComplaint=new C_Complaint();
			    $data= $clientComplaint->viewComplanitDetail($id);
                $complaint_attachment= new Attachment();
                $attachment= $complaint_attachment->where('reference_id',$id);

                
                if(count($_POST) > 0){
                    
                    $clientComplaint=new C_Complaint();
                    $clientComplaint->updateRemark($id,$_POST['remark']); 
                    $clientComplaint->updateStatus($id);

                    $user=new Staffs();
                    $coordinator=$user->where("role","Project Coordinator");

                    $notification=new Notifications();
                    $notifyData=[
                        'date'=>date('Y-m-d'),
                        'staff_id'=>$coordinator[0]->id,
                        'message'=>"Solve the client complaint on project id " .Auth::getProjectId() ,
                        'status'=>"Unseen",
                        'type'=>'complaint_sup',
                        'msg_id'=>$id,
                    ];
                    $notification->insert($notifyData);



                    $this->redirect('supcomplaint/viewComplaint/'.$id);
                }else{
                    $notification = new Notifications();
                    $notification->updateComplaintNotification($id);

                }

                $this->view('ViewComplaintHandle',['rows'=> $data,'attachment'=>$attachment]);
                
            
        }
        
    }
?>
