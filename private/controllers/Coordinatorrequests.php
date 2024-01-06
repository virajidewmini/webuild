<?php

    //coordinator viewrequest controller
    class Coordinatorrequests extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $project_requests=new Project_requests();

            $data=$project_requests->findAll();

            $this->view('coordinatorrequests',['rows'=>$data]);
        }


        public function seemore($id = null){
		
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $project_requests = new Project_requests();
            $data['common'] = $project_requests->requests($id)[0];
            
            if(strcmp($data['common']->status_of_land,"customer")==0){
                $data['customer'] = $project_requests->customer($id)[0];
                }
            else{
                $data['company'] = $project_requests->company($id)[0];
            }
            
            
            $this->view('coordinatorrequests.seemore',['rows'=>$data]);
           
	    }

        public function addmanager(){
		
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

           

            $this->view('coordinatorrequests.addmanager');

	    }

    }
?>