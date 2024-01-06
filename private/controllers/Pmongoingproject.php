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

		$project_request = new Project_requests();
		$data1 = $project_request->where2('manager_id','action',$pmi,'modified');
    
		$this->view('pmongoingproject',[
			'rows'=>$data,
			'rows1'=>$data1,
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