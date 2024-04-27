<?php 
    class SupComplaint extends Controller{

        public function index(){
            
                
                $Complaint=new Notifications();
                $user_id=Auth::id();
                
                
                $data=$Complaint->getSupervisorComplaint($user_id);
                $this->view('AllSupervisorComplaint',['rows'=> $data]);
        }

        public function viewComplaint($id=null){
            
                $clientComplaint=new C_Complaint();
			    $data= $clientComplaint->viewComplanitDetail($id);
                $complaint_attachment= new Attachment();
                $attachment= $complaint_attachment->where('reference_id',$id);

                if(count($_POST) > 0){
                    
                    $clientComplaint=new C_Complaint();
                    $clientComplaint->updateRemark($id,$_POST['remark']); 
                    $clientComplaint->updateStatus($id);
                    $this->redirect('supcomplaint/viewComplaint/'.$id);
                }

                $this->view('ViewComplaintHandle',['rows'=> $data,'attachment'=>$attachment]);
                
            
        }
        
    }
?>
