<?php

    class ClientTask extends Controller{
        
        public function index($id){
            $_SESSION['project_id'] = $id;
        
        
        $model=new AllocateTask();
       
        $data=$model->getTask($id);
       
            $this->view('viewTaskProgress',["rows"=>$data]);
        }

    }
?>