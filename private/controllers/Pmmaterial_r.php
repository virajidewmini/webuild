<?php

    //Manager materials controller
    class Pmmaterial_r extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('login');
            }
            $pmid = Auth::getId();

            $projects = new Projects();
		    $data = $projects->where2('action','ongoing','manager_id',$pmid);

            $project_requests = new Project_requests();
		
            if(isset($_GET['project_id'])){
                $project_id = $_GET['project_id'];
                $data1 = $project_requests->where('id',$project_id);
            }

            
           
            if(isset($_GET['level'])){
                $level = $_GET['level'];
                $data1 = $project_requests->where('id',$project_id);
            }
           
            $this->view('pmmaterial_r',[
                'rows'=>$data,
                'rows1'=>$data1,
            ]);

        }

        public function request($id = null)
            {
                // code...
                // if(!Auth::logged_in()){
                //     $this->redirect('login');
                // }
                // $project = new Projects();
                
                    
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