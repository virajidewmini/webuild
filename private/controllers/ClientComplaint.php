<?php 
    class ClientComplaint extends Controller{
        public function index(){
            
                //$db = new Database();
                //$clientComplaint=$this->load_model('C_Complaint');
                $clientComplaint=new C_Complaint();
                //$data = $db->query("select * from complaint");
                //$data= $clientComplaint->where('id',1);
                $data=$clientComplaint->findAll();
                $this->view('ViewClientComplaint',['rows'=> $data]);
            
    
        }
    }
?>