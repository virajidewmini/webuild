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


            $kitchen = new Kitchen();
            $bedroom = new Bedroom();
            $bathroom = new Bathroom();
            $dining = new Dining();
            $exterior = new Exterior();
            $living = new Living();
            

            if(!empty($data['common']->modification_id)){
                $data['kitchen_modification_details']=$kitchen->where('modification_id',$data['common']->modification_id) ;
                $data['bedroom_modification_details']=$bedroom->where('modification_id',$data['common']->modification_id) ;
                $data['bathroom_modification_details']=$bathroom->where('modification_id',$data['common']->modification_id) ;
                $data['living_modification_details']=$living->where('modification_id',$data['common']->modification_id) ;
                $data['dining_modification_details']=$dining->where('modification_id',$data['common']->modification_id) ;
                $data['exterior_modification_details']=$exterior->where('modification_id',$data['common']->modification_id) ;
                
                
                
            }

            $model = new Models();

            if(!empty($data['common']->model_id)){

               // $data['model_details']= $model->where('id',$data['common']->model_id) ;
               $data['model_details']=$project_requests->modeldetails($id)[0];

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
    


        public function addmanager($id=null,$manager_id=null,$manager_fname=null,$manager_lname=null){
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
                'manager_fname'=>$manager_fname,
                'manager_lname'=>$manager_lname,
            ]);

            


        }

    }
?>