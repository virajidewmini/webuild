<?php 
    class MaintainRequests extends Controller{
        public function index(){
            
                //$db = new Database();
                //$maintainrequests=$this->load_model('C_Complaint');
                $maintainrequests=new Maintains();

                // $data = $maintainrequests->findAllSortedByStatus();
                //$data = $db->query("select * from complaint");
                //$data= $maintainrequests->where('id',1);
                //$arr['project_id']='2';
                //$arr['status']='Pending';

                // Check if there is a search query
        


                //$maintainrequests->insert($arr);
                //$maintainrequests->update(3,$arr);
                //$maintainrequests->delete(4);
                $data=$maintainrequests->getMaintainRequest();
                $this->view('maintainRequestAfter',['rows'=> $data]);
        }
           



        public function add($material_id=null){
            $Material=new StoreMaterials();
            if(count($_POST) > 0){
                $maintainrequests=new Maintains();
                $_POST['requested_date']=date('Y-m-d');
                $maintainrequests->insert($_POST);
                $id= $_POST['material_id'];
                $arr['status']='NOTIFIED';
                $Material->update($id,$arr);
                $this->redirect('maintainrequests');
            }
            $Material=new StoreMaterials();
            $data = $Material->where('id',$material_id);

            $this->view('storekeeperSendRequests',['rows'=> $data]);
        }
        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $maintainrequests=new Maintains();
			    $maintainrequests->delete($id);
                $this->redirect('maintainrequests');

            }
            $this->view('DeleteMaintain');
        }
        
        
        
        public function update($id=null){
            $maintainrequests=new Maintains();
            if(count($_POST) > 0){
                $maintainrequests->update($id,$_POST);
                $this->redirect('maintainrequests');
            }
            $data  = $maintainrequests->where('id',$id);
            $this->view('editMaintainRequests',['rows'=> $data]);
        }

        public function updatestore($id=null, $material_id=null){
                $maintainrequests=new Maintains();
                $maintainrequests->updateMstore($id,$material_id);
                $this->redirect('maintainrequests');
        }
        
    }
?>