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
                //$mainTain->update(3,$arr);
                //$mainTain->delete(4);
                $data=$maintain->findAll();
                $this->view('storekeeperMaintain',['rows'=> $data]);
        }

        
        public function add(){
            if(count($_POST) > 0){
                $maintain=new Maintains();
			    $maintain->insert($_POST);
                $this->redirect('storekeeperMaintain');
            }

            $this->view('AddMaintain');
        }

        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $maintain=new Maintains();
			    $maintain->delete($id);
                $this->redirect('storekeeperMaintain');

            }
            $this->view('DeleteComplaint');
        }
        
        
    }
?>