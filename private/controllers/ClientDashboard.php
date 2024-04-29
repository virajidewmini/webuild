<?php
    class ClientDashboard extends Controller{
        
        public function index(){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }
            
            $id=Auth::getId();
            $model=new Client();
            $data=$model->getProject($id);
            $request=$model->getProjectRequest($id);
            
            
            $this->view('ClientDashboard',['rows'=>$data, 'req'=>$request]);
        }


    }
?>