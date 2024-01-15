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
        $project_id=1;
        $model=new AllocateTask();
        $data= $model->getMainTask($id);
        $sub_task=$model->getSubTask($id);
        $estimate=$model->where("task_id",$id); 

        $start_date=$model->getStartDate($id,$project_id);
        $duration=$model->getDuration($id);
        

        $startDate = $start_date[0]->est_start_date;
       
        
        $dateObject = DateTime::createFromFormat('Y-m-d', $startDate);
        
        

        $durationOb=intval($duration[0]->duration);
        // var_dump($durarionOb);

        $when = new DateTime($startDate);
        $when->modify('+' . $durationOb . ' days');
        $end_date=$when->format('Y-m-d');


        
        $this->view('AllocateCoworkers',['rows'=>$data,'subTask'=>$sub_task,'est'=>$estimate,'start'=>$start_date,'end'=>$end_date]);
    }
}
?>