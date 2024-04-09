<?php

    class Status extends Controller{
        
        public function index(){
            $this->view('UpdateStatus');
        }
        public function UpdateState($id){
            $model=new SubTask();
            $data=$model->where('id',$id);
            if($data){
                $data=$data[0];
            }

            if(count($_POST) > 0){

                $model=new SubTask();
			    $model->update($id,$_POST);

                $task_id=$model->where("subtask_id",$id);
                

                $taskStatus=$model->getStatus($task_id[0]->task_id);

                $allCompleted = true;
                
                foreach ($taskStatus as $statusObject) {
                    $status = trim($statusObject->status);
                    if ($status !== "Complete") {
                        $allCompleted = false;
                        break;
                    }
                }
                
                if ($allCompleted) {
                    $model->UpdateStatus($task_id[0]->task_id);
                } 

                foreach ($taskStatus as $statusObject) {
                    
                    $status = trim($statusObject->status);
                    if ($status == "Suspend") {
                        $model->UpdateSuspendStatus($task_id[0]->task_id);
                        break;
                    }else if($_POST['status']=="Suspend"){
                        $model->UpdateSuspendStatus($task_id[0]->task_id);
                    }else if($_POST['status']=="Ongoing"){
                        $model->UpdateOngoingStatus($task_id[0]->task_id);
                    }
                }

               
                $this->redirect('task');
            }

            $this->view('UpdateStatus',["rows"=>$data]);
        }
    }
?>