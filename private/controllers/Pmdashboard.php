<?php

    //manager dashboard controller
    class Pmdashboard extends Controller{
        
        public function index()
        {
            if(!Auth::logged_in()){
                $this->redirect('login');
            }
            $pmi = Auth::getid();

            $dtbase = new Dtbase();
            $data = $dtbase->alldpr($pmi);

        
            $this->view('pmdashboard',[
                'rows'=>$data
            ]);
        }

    }
?>