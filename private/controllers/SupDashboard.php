<?php
    class SupDashboard extends Controller{
        
        public function index(){

            var_dump(Auth::getRole());
            $id=Auth::getId();

            $model=new Supervisor();
            $data=$model->getProject($id);
            //var_dump($data);
            
            $this->view('SupervisorDashboard',['rows'=>$data]);
        }

    }
?>