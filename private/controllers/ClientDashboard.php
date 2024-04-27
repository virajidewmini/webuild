<?php
    class ClientDashboard extends Controller{
        
        public function index(){

            
            $id=Auth::getId();
            $model=new Client();
            $data=$model->getProject($id);
            $request=$model->getProjectRequest($id);
            
            
            $this->view('ClientDashboard',['rows'=>$data, 'req'=>$request]);
        }


    }
?>