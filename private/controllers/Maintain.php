<?php 
    class Maintain extends Controller{
        public function index(){
            
                //$db = new Database();
                $storeMaintain=new StoreMaterials();

                // $data = $db->query("select * from miantain");
                $data= $storeMaintain->findAll();
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                usort($data, function($a, $b) {
                    if ($a->status == 'NORMAL' && $b->status != 'NORMAL') {
                        return 1; // Move "REJECT" row to the bottom
                    } elseif ($a->status != 'NORMAL' && $b->status == 'NORMAL') {
                        return -1; // Keep "REJECT" row at the top
                    } else {
                        return 0; // Preserve original order for other rows
                    }
                });
                //$mainTain->insert($arr);
                // $maintain->update(3,$arr);
                // $maintain->delete(4);
                // $data=$maintain->findAll();
                $this->view('storekeeperMaintain',['rows'=> $data]);
        }

        
        // public function add(){
        //     if(count($_POST) > 0){
        //         $maintain=new Maintains();
        //         $maintain->insert($_POST);
        //         $this->redirect('maintainrequests');
        //     }

        //     $this->view('storekeeperSendRequests');
        // }

        
        // public function delete($id=null){
           
        //     if(count($_POST) > 0){
        //         $maintain=new Maintains();
		// 	    $maintain->delete($id);
        //         $this->redirect('maintainrequests');

        //     }
        //     $this->view('DeleteMaintain');
        // }
        
        
        
        // public function update($id=null){
           
        //     if(count($_POST) > 0){
        //         $maintain=new Maintains();
        //         $maintain->update($id,$_POST);
        //         $this->redirect('maintainrequests');

        //     }
        //     $this->view('editMaintainRequests');
        // }
        
    }
?>