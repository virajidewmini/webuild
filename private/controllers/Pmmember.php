<?php

    //Manager members controller
    class Pmmember extends Controller{
        

        public function index()
	{
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}

        $project = new Projects();
		$data = $project->findAll();
    
		$this->view('pmmember',[
            'rows'=>$data
        ]);
	}

    }
?>