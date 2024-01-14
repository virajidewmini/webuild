<?php

class Task extends Controller{
    
    public function index(){

        // Need to get module id from session
        $id=1;

        $model=new AllocateTask();
       
        $data=$model->getTask($id);
        $this->view('ViewTask',["rows"=>$data]);
    }

    public function addCoworker($id){
        $model=new AllocateTask();
        $data= $model->getMainTask($id);
        $sub_task=$model->getSubTask($id);
        $estimate=$model->where("task_id",$id);  
        $this->view('AllocateCoworkers',['rows'=>$data,'subTask'=>$sub_task,'est'=>$estimate]);
    }
}
?>