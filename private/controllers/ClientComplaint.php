<?php 
    class ClientComplaint extends Controller{
        public function index(){
            
                //$db = new Database();
                //$clientComplaint=$this->load_model('C_Complaint');
                $clientComplaint=new C_Complaint();
                //$data = $db->query("select * from complaint");
                //$data= $clientComplaint->where('id',1);
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                //$clientComplaint->insert($arr);
                //$clientComplaint->update(3,$arr);
                //$clientComplaint->delete(4);
                $data=$clientComplaint->findAll();
                $this->view('ViewClientComplaint',['rows'=> $data]);
        }

        public function add(){
            if(count($_POST) > 0){
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
                $this->redirect('clientcomplaint');

            }
            $this->view('DeleteComplaint');
        }
        
        
    }
?>
