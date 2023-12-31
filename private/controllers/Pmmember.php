<?php

    //Manager members controller
    class Pmmember extends Controller{
        

        public function index()
	{
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}
        $pmi = Auth::getid();

        $s_mem = new Dtbase();
		$data = $s_mem->allmember($pmi);
    
		$this->view('pmmember',[
            'rows'=>$data
        ]);
	}

    }
?>