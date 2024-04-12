<?php

    //coordinator dashboard controller
    class Coordinatordashboard extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $projects= new Projects();
            $data['ongoing'] = $projects -> getOngoingProjectCount();

            $project_requests= new Project_requests();
            $data['project_request_count'] = $project_requests -> getProjectRequestCount();



            $ratings= new Ratings();
            $data['ratings']=$ratings->getRatings();

            $this->view('coordinatordashboard',['rows'=>$data]);
        }

    }
?>