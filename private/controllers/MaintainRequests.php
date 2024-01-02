<?php 
    class MaintainRequests extends Controller{
        public function index(){
            
                //$db = new Database();
                //$maintainrequests=$this->load_model('C_Complaint');
                $maintainrequests=new Maintains();
                //$data = $db->query("select * from complaint");
                //$data= $maintainrequests->where('id',1);
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                //$maintainrequests->insert($arr);
                //$maintainrequests->update(3,$arr);
                //$maintainrequests->delete(4);
                $data=$maintainrequests->findAll();
                $this->view('maintainRequestAfter',['rows'=> $data]);
        }

        public function add(){
            if(count($_POST) > 0){
                $maintainrequests=new Maintains();
			    $maintainrequests->insert($_POST);
                $this->redirect('clientcomplaint');
            }

            $this->view('AddClientComplaint');
        }

        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $maintainrequests=new Maintains();
			    $maintainrequests->delete($id);
                $this->redirect('clientcomplaint');

            }
            $this->view('DeleteComplaint');
        }
        
        
    }
?>