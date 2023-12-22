<?php 
    class ClientComplaint extends Controller{

        public function index(){
            
                
                $clientComplaint=new C_Complaint();
                
                $data=$clientComplaint->findAll();
                $this->view('ViewClientComplaint',['rows'=> $data]);
        }

        public function add(){
            if(count($_POST) > 0){

                $model = new UploadModel();
                $model->uploadFiles($_FILES['files']);

                $clientComplaint=new C_Complaint();
			    $clientComplaint->insert($_POST);
                $this->redirect('clientcomplaint');
            }

            $this->view('AddClientComplaint');
        }

        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $clientComplaint=new C_Complaint();
			    $clientComplaint->delete($id);
                // $this->redirect('clientcomplaint');

            }
            $this->view('DeleteComplaint');
        }
        
        
    }
?>
