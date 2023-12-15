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

        $project_detail = new Project_detail();
		$data = $project_detail->where2('m_user_id',$pmi,'action','ongoing');
    
		$this->view('pmongoingproject',['rows'=>$data]);
	}

	public function show($id = null)
	{
		// code...
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}

        $project_detail = new Project_detail();
		$data = $project_detail->where('project_id',$id);

		$this->view('pmprojectprofile',['rows'=>$data]);

	}

}