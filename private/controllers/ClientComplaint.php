<?php 
    class ClientComplaint extends Controller{

        public function index(){
            
                
                $clientComplaint=new C_Complaint();
                
                $data=$clientComplaint->findAll();
                $this->view('ViewClientComplaint',['rows'=> $data]);
        }

        public function viewComplaint($id=null){
            
                $clientComplaint=new C_Complaint();
			    $data= $clientComplaint->viewComplanitDetail($id);
                $complaint_attachment= new Attachment();
                $attachment= $complaint_attachment->where('reference_id',$id);
                $this->view('ViewMoreComplaint',['rows'=> $data,'attachment'=>$attachment]);
                
            
        }

        public function add(){
            if(count($_POST) > 0){

                $model = new UploadModel();
                

                $clientComplaint=new C_Complaint();
                $complaint_id = uniqid();
                $_POST['id'] = $complaint_id;
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

                //  $this->redirect('clientcomplaint');
            }

           

            $this->view('AddClientComplaint');
        }

        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $clientComplaint=new C_Complaint();
			    $clientComplaint->delete($id);
                $this->redirect('clientcomplaint');

            }
            $this->view('DeleteComplaint');
        }
        
        
    }
?>
