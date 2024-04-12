<?php

    //Manager materials controller
    class Pmmaterial extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('login');
            }
            $this->view('pmmaterial');
        }

        public function request_view($id = null)
            {
                // code...
            //     if(!Auth::logged_in()){
            //         $this->redirect('login');
            //     }
            //     $project = new Projects();
                
                    
            //    if( $_SERVER['REQUEST_METHOD'] =='POST'){
            //     if($project->validate($_POST)){
                    
            //         $id1 = $_POST['id'];
            //         $arr['supervisor_id']=$_POST['supervisor_id'];
            //         $arr['date']=$_POST['date'];
            //         $arr['final_date']=$_POST['final_date'];
            //         $arr['action'] = 'ongoing';
            //         $project->update($id1,$arr);
            //         $this->redirect('pmmember');
            //     }
            //     }
            //     $staff=new Staffs();
            //     $row = $staff->where('id',$id);
                
                
            //     $this->view('pmmember_add',[
            //         'row'=>$row,
            //     ]);
            }

    }
?>