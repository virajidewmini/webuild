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


        public function seemore($id = null,$flag=null){
		
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $project_requests = new Project_requests();
            $data['common'] = $project_requests->requests($id)[0];
            
            if(!empty($data['common']->manager_id)){

            $data['manager_details']= $project_requests->managerdetails($id)[0];
            }
            if(!empty($data['common']->modification_id)){
            $data['modification_details']= $project_requests->modificationdetails($id)[0];
            }
            if(!empty($data['common']->model_id)){
            $data['model_details']= $project_requests->modeldetails($id)[0];
            }
            if(strcmp($data['common']->status_of_land,"customer")==0){
                $data['customer'] = $project_requests->customer($id)[0];
                $data['managers']= $project_requests->find_managers_in_district($data['customer']->ul_district);
            }
            else{
                $data['company'] = $project_requests->company($id)[0];
                $data['managers']= $project_requests->find_managers_in_district($data['company']->district);
            }
            
            if($flag !== null){
                $this->view('coordinatorrequests.searchmanager',['rows'=>$data]);
            }
            else{
                $this->view('coordinatorrequests.seemore',['rows'=>$data]);
            }
	    }


        public function addmanager($id=null,$manager_id=null){
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }


            $project_requests=new Project_requests();

            $errors=array();        
            if (count($_POST)>0){
                

                $project_requests->update($id,$_POST);
                

                $this->redirect('coordinatorrequests');

                
            }
            $row = $project_requests->where('id',$id);
            
            $this->view('coordinatorrequests.addmanager',[
                'row'=>$row,
                'manager_id'=>$manager_id,
            ]);

            


        }

    }
?>