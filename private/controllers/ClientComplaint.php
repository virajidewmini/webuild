<?php 
        use Respect\Validation\Validator as v;

    class ClientComplaint extends Controller{


        public function index(){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }
            
                
                $clientComplaint=new C_Complaint();
                $project_id=Auth::getProjectId();
                
                
                $data=$clientComplaint->where("project_id",$project_id);
                $this->view('ViewClientComplaint',['rows'=> $data]);
        }

        public function viewComplaint($id=null){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }
            
                $clientComplaint=new C_Complaint();
			    $data= $clientComplaint->viewComplanitDetail($id);
                $complaint_attachment= new Attachment();
                $attachment= $complaint_attachment->where('reference_id',$id);
                $this->view('ViewMoreComplaint',['rows'=> $data,'attachment'=>$attachment]);
                
            
        }

        public function add(){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }

            if(count($_POST) > 0){

                $descriptionValidator = v::notEmpty()->stringType()->length(null, 200);
        
                $errors = [];

                if (! isset($_POST['type'])) {
                    $errors['type'] = 'Please select type';
                }
        
                if (! $descriptionValidator->validate($_POST['description'])) {
                    $errors['description'] = 'Description must be a string with maximum length 200 and can not empty';
                }
    
                if (empty($errors)) {
                    $model = new UploadModel();
                

                    $clientComplaint=new C_Complaint();
                    $complaint_id = uniqid();
                    $_POST['id'] = $complaint_id;
                    $_POST['date']=date('Y-m-d');
                    $_POST['project_id']=Auth::getProjectId();
                    $clientComplaint->insert($_POST);
                   
    
                    $uploadedFiles = $model->uploadFiles($_FILES['files']);
                    foreach ($uploadedFiles as $file) {
                        $attachment_data= [
                            'reference_id' => $complaint_id,
                            'file_name' => $file,
                            'attachment_type'=> "COMPLAINT"
                        ];
                        $attachment_model = new Attachment();
                        $attachment_model->insert($attachment_data);
    
                        
                    }

                    $user=new Staffs();
                    $coordinator=$user->where("role","Project Coordinator");

                    $notification=new Notifications();
                    $complaintNotification=[
                        'date'=>date('Y-m-d'),
                        'staff_id'=>$coordinator[0]->id,
                        'message'=>"Client complaint on project id " .Auth::getProjectId(). " for " . $_POST['type'],
                        'status'=>"Unseen",
                        'type'=>'complaint',
                        'msg_id'=>$complaint_id,
                    ];

                    $notification->insert($complaintNotification);
                    $this->redirect('clientcomplaint');

                } else {
                    
                    $this->view('AddClientComplaint', ['errors' => $errors]);
                }
            }

           

            $this->view('AddClientComplaint');
        }

        
        public function delete($id=null){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }
           
            if(count($_POST) > 0){
                $clientComplaint=new C_Complaint();
			    $clientComplaint->delete($id);
                $this->redirect('clientcomplaint');

            }
            $this->view('DeleteComplaint');
        }
        
        
    }
?>
