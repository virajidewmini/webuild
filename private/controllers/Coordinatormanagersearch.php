<?php

    class Coordinatormanagersearch extends Controller{
        

        public function index()
        {
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $project_requests = new Project_requests();

            if(isset($_GET['district'])){
                $district = $_GET['district'];
                $data['managers']= $project_requests->find_managers_in_district($district);
                
            }
            $this->view('coordinatorrequests.searchmanager',['rows'=>$data]);
        }

   
    }
?>