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
           



        // public function add($material_id=null){
        //     $Material=new StoreMaterials();
        //     if(count($_POST) > 0){
        //         $maintainrequests=new Maintains();
        //         $_POST['requested_date']=date('Y-m-d');
        //         $maintainrequests->insert($_POST);
        //         $id= $_POST['material_id'];
        //         $arr['status']='NOTIFIED';
        //         $Material->update($id,$arr);
        //         $this->redirect('maintainrequests');
        //     }
        //     $Material=new StoreMaterials();
        //     $data = $Material->where('id',$material_id);

        //     $this->view('storekeeperSendRequests',['rows'=> $data]);
        // }


        public function add($material_id=null){
            $Material=new StoreMaterials();
            $error = ''; // Initialize error message
        
            if(count($_POST) > 0){
                // Check if requested_quantity is not empty and greater than 0
                if(isset($_POST['requested_quantity']) && $_POST['requested_quantity'] > 0){
                    $maintainrequests=new Maintains();
                    $_POST['requested_date']=date('Y-m-d');
                    $maintainrequests->insert($_POST);
                    $id= $_POST['material_id'];
                    $arr['status']='NOTIFIED';
                    $Material->update($id,$arr);
                    $this->redirect('maintainrequests');
                } else {
                    // Set validation error message
                    $error = "You Entered wrong quantity!";
                }
            }
        
            // Fetch data for view
            $Material=new StoreMaterials();
            $data = $Material->where('id',$material_id);
        
            // Pass error message to the view along with other data
            $this->view('storekeeperSendRequests', [
                'rows'=> $data,
                'error' => $error // Include error message in the data passed to the view
            ]);
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