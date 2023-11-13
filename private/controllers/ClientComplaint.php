<?php 
    class ClientComplaint extends Controller{
        public function index(){
            
                //$db = new Database();
                //$clientComplaint=$this->load_model('C_Complaint');
                $clientComplaint=new C_Complaint();
                //$data = $db->query("select * from complaint");
                //$data= $clientComplaint->where('id',1);
                //$arr['project_id']='2';
                $arr['type']='amma';
                $arr['description']='Emla Panda ada na ';
                //$arr['status']='Pending';

               

                //$clientComplaint->insert($arr);
                //$clientComplaint->update(3,$arr);
                $clientComplaint->delete(4);
                $data=$clientComplaint->findAll();
                $this->view('ViewClientComplaint',['rows'=> $data]);
        }
    }
?>