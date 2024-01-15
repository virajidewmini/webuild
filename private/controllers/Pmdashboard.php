<?php

    //manager dashboard controller
    class Pmdashboard extends Controller{
        
        public function index()
        {
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }
            $pmi = Auth::getid();

            $project_request = new Project_requests();
            $data2 = $project_request->where2('manager_id',$pmi,'action','modified');

            $project_dpr = new Project_dprs();
            $data = $project_dpr->where('manager_id',$pmi);
            // $data1 = $dtbase->alltask($pmi);

            $project_task = new Project_tasks() ;
            $data1 = $project_task->findAll();
        
            $this->view('pmdashboard',[
                'rows'=>$data,
                'rows1'=>$data1,
                'rows2'=>$data2,
            ]);
        }

        public function subtask($id = null)
            {
                // code...
                if(!Auth::logged_in()){
                    $this->redirect('login');
                }
                $project_task = new Project_tasks();
                $row = $project_task->where('sub_task_id',$id);
                
                
                $this->view('pmongoingsubtask_view',[
                    'row'=>$row,
                ]);
            }


    }
?>