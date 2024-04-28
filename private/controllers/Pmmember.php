<?php

    //Manager members controller
    class Pmmember extends Controller{
        

        public function index()
	{
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}
        $pmi = Auth::getid();

        //to get all supervisors
        $project = new Projects();
        $data = $project->where2('manager_id', $pmi, 'status', 'Ongoing');

        $allocated_corworker = new AllocateCOworker();
        if (isset($_GET['project_id'])) {
            if ($_GET['project_id']) {
                $project_id = $_GET['project_id'];
                $data1 = $project->where2('status', 'Ongoing', 'id', $project_id);
                $data2 = $allocated_corworker->getAllcorworkers_P($project_id);
            }
            else {
                $data1 = $project->where2('manager_id', $pmi, 'status', 'Ongoing');
                $data2 = $allocated_corworker->getAllcorworkers($pmi);
            }
        } 
        else {
            $data1 = $project->where2('manager_id', $pmi, 'status', 'Ongoing');
            $data2 = $allocated_corworker->getAllcorworkers($pmi);
        }
    
		$this->view('pmmember',[
            'rows'=>$data,
            'rows1'=>$data1,
            'rows2'=>$data2,
        ]);
	}

    }
?>