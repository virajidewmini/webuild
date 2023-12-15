<?php

    //manager dashboard controller
    class Pmdashboard extends Controller{
        
        public function index()
        {
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }
            $pmi = Auth::getid();

            $dtbase = new Dtbase();
            $data = $dtbase->alldpr($pmi);
            // $data1 = $dtbase->alltask($pmi);

            $project_task = new Project_tasks() ;
            $data1 = $project_task->findAll();
        
            $this->view('pmdashboard',[
                'rows'=>$data,
                'rows1'=>$data1,
            ]);
        }

    }
?>