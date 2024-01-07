<?php 
    class Maintain extends Controller{
        public function index(){
            
                //$db = new Database();
                //$mainTain=$this->load_model('Maintain');
                $maintain=new Maintains();
                // $data = $db->query("select * from miantain");
                //$data= $mainTain->where('id',1);
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                //$mainTain->insert($arr);
                // $maintain->update(3,$arr);
                // $maintain->delete(4);
                $data=$maintain->findAll();
                $this->view('storekeeperMaintain',['rows'=> $data]);
        }

        
        public function add(){
            if(count($_POST) > 0){
                $maintain=new Maintains();
			    $maintain->insert($_POST);
                $this->redirect('maintainrequests');
            }

            $this->view('storekeeperSendRequests');
        }

        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $maintain=new Maintains();
			    $maintain->delete($id);
                $this->redirect('maintainrequests');

            }
            $this->view('DeleteMaintain');
        }
        
        public function update($id=null){
           
            if(count($_POST) > 0){
                $maintain=new Maintains();
			    $maintain->update($id,$_POST);
                $this->redirect('maintainrequests');

            }
            $this->view('editMaintainRequests');
        }
        
    }
?>