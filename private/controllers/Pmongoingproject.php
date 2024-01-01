<?php

/**
 * pmproject controller
 */
class Pmongoingproject extends Controller
{
	
	public function index()
	{
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}
        $pmi = Auth::getid();

        $projects = new Projects();
		$data = $projects->where('manager_id',$pmi);
    
		$this->view('pmongoingproject',[
			'rows'=>$data
		]);
	}

	public function show($id = null)
	{
		// code...
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}

        // $project_detail = new Project_detail();
		// $data = $project_detail->where('project_id',$id);

		$this->view('pmprojectprofile',['rows'=>$data]);

	}

}