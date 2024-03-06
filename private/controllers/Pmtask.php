<?php

    //coordinator dashboard controller
    class Pmtask extends Controller{
        
        public function index(){

            if(!Auth::logged_in()){
                $this->redirect('login');
            }

            $task=new Tasks();
            $data=$task->findAll();

            $allocated_task = new Allocated_tasks();
            $data1 = $allocated_task->where('status','Ongoing');

            $this->view('pmtask',[
                'rows'=>$data,
                'rows1'=>$data1,
            ]);
        }

        public function add($id = null, $p_id = null)
            {
                // code...
                if(!Auth::logged_in()){
                    $this->redirect('login');
                }
                $allocated_tasks = new Allocated_tasks();
                
                    
               if( $_SERVER['REQUEST_METHOD'] =='POST'){
                if($allocated_tasks->validate($_POST)){
                    
                    $_POST['status'] = 'Pending';
                    $allocated_tasks->insert($_POST);
                    $this->redirect('pmtask');
                }
                }
                $sub_task=new Sub_tasks();
                $row = $sub_task->where('task_id',$id);
                
                if (isset($p_id)){
                    $project=new Projects();
                    $row1 = $project->where('id',$p_id);
                }
                
                
                $this->view('pmtask_add',[
                    'row'=>$row,
                    'row1'=>$row1,
                ]);
            }

            public function taskDetails($id = null)
            {
                // code...
                if(!Auth::logged_in()){
                    $this->redirect('login');
                }
                $sub_task=new Sub_tasks();
                $row = $sub_task->where('id',$id);
                
                
                
                $this->view('pmtaskdetails',[
                    'row'=>$row,
                ]);
            }

    }
?>