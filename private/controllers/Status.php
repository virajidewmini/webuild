<?php

    class Status extends Controller{
        
        public function index(){
            if (!Auth::logged_in()) {
                $this->redirect('/staff_login');
            }

            $this->view('UpdateStatus');
        }
        public function UpdateState($id){
            if (!Auth::logged_in()) {
                $this->redirect('/staff_login');
            }
            
            $model=new SubTask();

            $project_id=Auth::getProjectId();
            $data=$model->getSubTaskStatus($id,$project_id);
            // var_dump($id,$project_id);
           
            if($data){
                $data=$data[0];
            }

            if(count($_POST) > 0){

                $project_id=Auth::getProjectId();

                $model=new SubTask();

			    //$model->update($id,$_POST);
                

                $task_id=$model->where("subtask_id",$id);
                
                $model->UpdateSubTaskStatus($task_id[0]->task_id,$id,$project_id,$_POST["status"]);

                $model->UpdadeRemark($task_id[0]->task_id,$id,$project_id,$_POST["remark"]);
                

                $taskStatus=$model->getStatus($task_id[0]->task_id,$project_id);
                
                $allCompleted = true;
                
                foreach ($taskStatus as $statusObject) {
                    $status = trim($statusObject->status);
                    if ($status !== "Complete") {
                        $allCompleted = false;
                        break;
                    }
                }
                
                if ($allCompleted) {
                    $model->UpdateStatus($task_id[0]->task_id,$project_id);
                } 

                foreach ($taskStatus as $statusObject) {
                    
                    $status = trim($statusObject->status);
                    if ($status == "Suspend") {
                        $model->UpdateSuspendStatus($task_id[0]->task_id,$project_id);
                        break;
                    }else if($_POST['status']=="Suspend"){
                        $model->UpdateSuspendStatus($task_id[0]->task_id,$project_id);
                    }else if($_POST['status']=="Ongoing"){
                        $model->UpdateOngoingStatus($task_id[0]->task_id,$project_id);
                     }
                    
                }


                if($_POST['status']=="Complete"){
                    $task_weight=$model->getweight($id);
                    $previousProgress=$model->getPreviousProgress($task_id[0]->task_id,$project_id);

                    $task_weight=intval($task_weight[0]->weight);
                    $previousProgress = intval($previousProgress[0]->progress);
                    
                    $progress=$task_weight+$previousProgress;
                    $model->updateProgress($task_id[0]->task_id,$project_id,$progress);
                }
                
                
               
                $this->redirect('task/'.Auth::getProjectId());
            }

            $this->view('UpdateStatus',["rows"=>$data]);
        }
    }
?>