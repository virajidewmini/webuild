<?php

    class Coordinatormanagersearch extends Controller{
        

        public function index($id = null){
		
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $project_requests = new Project_requests();
           // print_r($id);
            $data['common'] = $project_requests->requests($id)[0];
            $data['common'] ->id=$id;

            if(!empty($data['common']->model_id)){

                $model=new Models();
                $data['model_details']= $model->modeldetails($data['common']->model_id)[0];
            }
            
            
            
            $data['customer'] = $project_requests->customer($data['common']->modification_id)[0];
            // if(strcmp($data['common']->land_type,"customer")==0){
            //     $data['customer'] = $project_requests->customer($id)[0];
            // }
            // else{
            //     $data['company'] = $project_requests->company($id)[0];
            // }


            if(isset($_POST['district'])){
                $district = $_POST['district'];
                $data['managers'] = $project_requests->find_managers_in_district($district);
            }
            
            
           $this->view('coordinatorrequests.searchmanager',['rows'=>$data]);
            
	    }

   
    }
?>