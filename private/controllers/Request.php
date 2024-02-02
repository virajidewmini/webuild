<?php 
    class Request extends Controller{
        public function index(){
            
                //$db = new Database();
                //$request=$this->load_model('request');
                $request=new Requests();
                // $data = $db->query("select * from miantain");
                //$data= $request->where('id',1);
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                //$request->insert($arr);
                // $request->update(3,$arr);
                // $request->delete(4);
                $data=$request->findAll();
                $this->view('storekeeperrequest',['rows'=> $data]);



        }

        public function sendQuotation($id=null){
            
            $request=new C_Complaint();
            $data= $request->viewComplanitDetail($id);
            $complaint_attachment= new Attachment();
            // $attachment= $complaint_attachment->where('reference_id',$id);
            $this->view('materialRequestQuotation',['rows'=> $data,'attachment'=>$attachment]);
            $this->redirect('storekeeperRequests');
        
    }



        public function add(){
            if(count($_POST) > 0){
                $request=new requests();
                $request->insert($_POST);
                $this->redirect('requestrequests');
            }

            $this->view('storekeeperSendRequests');
        }

        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $request=new requests();
                $request->delete($id);
                $this->redirect('requestrequests');

            }
            $this->view('Deleterequest');
        }
        
        public function update($id=null){
           
            if(count($_POST) > 0){
                $request=new requests();
                $request->update($id,$_POST);
                $this->redirect('requestrequests');

            }
            $this->view('editrequestRequests');
        }
        
    }
?>
