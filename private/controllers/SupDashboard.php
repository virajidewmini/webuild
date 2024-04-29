<?php
    class SupDashboard extends Controller{
        
        public function index(){

            if (!Auth::logged_in()) {
                $this->redirect('/staff_login');
            }
            
            $id=Auth::getId();

            $model=new Supervisor();
            $data=$model->getProject($id);
            //var_dump($data);
            
            $this->view('SupervisorDashboard',['rows'=>$data]);
        }

    }
?>