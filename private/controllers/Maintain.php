<?php 
    class Maintain extends Controller{
        public function index(){
            
                //$db = new Database();
                //$mainTain=$this->load_model('Maintain');
                $mainTain=new Maintain();
                // $data = $db->query("select * from miantain");
                //$data= $mainTain->where('id',1);
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                //$mainTain->insert($arr);
                //$mainTain->update(3,$arr);
                //$mainTain->delete(4);
                // $data=$mainTain->findAll();
                $this->view('storekeeperMaintain',['rows'=> $data]);
        }

        
        public function add(){
            if(count($_POST) > 0){
                $mainTain=new Maintain();
			    $mainTain->insert($_POST);
                $this->redirect('Maintain');
            }

            $this->view('AddMaintan');
        }

        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $mainTain=new Maintain();
			    $mainTain->delete($id);
                $this->redirect('Maintain');

            }
            $this->view('DeleteComplaint');
        }
        
        
    }
?>