<?php

class Task extends Controller{
    
    public function index($id){
        
        $_SESSION['project_id'] = $id;
        
        
        // var_dump(Auth::getProjectId());
        $model=new AllocateTask();
       
        $data=$model->getTask($id);
        $this->view('ViewTask',["rows"=>$data]);
    }

    public function edit($id=null){
        
        // Need to get module id from session
       
        $model=new AllocateTask();
       
        $sub_task=$model->getSubTaskDetails($id);
        $this->view('ViewSubTask',["rows"=>$sub_task, "ids"=>$id]);
    }

    public function addCoworker($id){
        $project_id=Auth::getProjectId();
        $model=new AllocateTask();
        $data= $model->getMainTask($id);
        $sub_task=$model->getSubTask($id);
        $estimate=$model->where("task_id",$id); 


        $start_date=$model->getStartDate($id,$project_id);
        $duration=$model->getDuration($id);
         


        $startDate = $start_date[0]->est_start_date;
       
        
        $dateObject = DateTime::createFromFormat('Y-m-d', $startDate);
        
        

        $durationOb=intval($duration[0]->duration);

        $when = new DateTime($startDate);
        $when->modify('+' . $durationOb . ' days');
        $end_date=$when->format('Y-m-d');

        $coworker= new AllocateCoworker();
        $worker= $coworker->getData($project_id,$id);
       
        $this->view('AllocateCoworkers',['rows'=>$data,'subTask'=>$sub_task,'est'=>$estimate,'start'=>$start_date,'end'=>$end_date,'task_id'=>$id,'coworkers'=>$worker]);
    }

    public function addAutomatically($id){
        
     
        $project_id=Auth::getProjectId();
        $model=new AllocateTask();
        $data= $model->getMainTask($id);
        $sub_task=$model->getSubTask($id);
        $estimate=$model->where("task_id",$id); 

        $start_date=$model->getStartDate($id,$project_id);
        $duration=$model->getDuration($id);
        

        $startDate = $start_date[0]->est_start_date;
       
        
        $dateObject = DateTime::createFromFormat('Y-m-d', $startDate);
        
        

        $durationOb=intval($duration[0]->duration);

        $when = new DateTime($startDate);
        $when->modify('+' . $durationOb . ' days');
        $end_date=$when->format('Y-m-d');

        $Automodel=new Auto();
        $Automodel->allocate($project_id,$id,$startDate,$end_date,$estimate);

        $coworker= new AllocateCoworker();
        $worker= $coworker->getData($project_id,$id);

        $phone=$coworker->getPhone($project_id,$id);

       
        $message=new Message();


        $messageText="Hello! This is a reminder about the project Prime Villas starting on {$start_date[0]->est_start_date} and ending on {$end_date}. Please be prepared and ensure to report on time for duty. Thank you!";
       
        foreach ($phone as $phoneNumberObject) {

            
            $phoneNumber=$phoneNumberObject->phone_no;

                $queryParams = array(
                    'to' => $phoneNumber,
                    'text' => $messageText,
                    
                );
                
                // $message->callApiWithQueryParams($queryParams);

        }
        $this->view('AutoAssign',['coworkers'=>$worker]);
        
    }
}
?>