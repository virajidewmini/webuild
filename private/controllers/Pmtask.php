<?php

    //coordinator dashboard controller
    class Pmtask extends Controller{
        
        public function index(){

            if(!Auth::logged_in()){
                $this->redirect('login');
            }

            $sub_task=new Sub_tasks();
            

            $data=$sub_task->findAll();

            $this->view('pmtask',['rows'=>$data]);
        }

        public function add($id = null)
            {
                // code...
                if(!Auth::logged_in()){
                    $this->redirect('login');
                }
                $project_task = new Project_tasks();
                
                    
               if( $_SERVER['REQUEST_METHOD'] =='POST'){
                if($project_task->validate($_POST)){
                    
                    $project_task->insert($_POST);
                    $this->redirect('pmtask');
                }
                }
                $sub_task=new Sub_tasks();
                $row = $sub_task->where('sub_task_id',$id);
                
                
                $this->view('pmtask_add',[
                    'row'=>$row,
                ]);
            }

    }
?>