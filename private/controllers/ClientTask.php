<?php

    class ClientTask extends Controller{
        
        public function index(){
            // $_SESSION['project_id'] = $id;
        
        $id=Auth::getProjectId();
        $model=new AllocateTask();
       
        $data=$model->getTask($id);
        $avg=$model->getAverageProgress();
       
            $this->view('viewTaskProgress',["rows"=>$data,"avg"=>$avg]);
        }

        public function viewProgress($id){

            $model=new AllocateTask();
            $data=$model->getMainTask($id);
            $sub_task=$model->getSubTaskDetails($id);

            $photoModel=new Photograph();

            $reference_id= $photoModel->getReferenceId(Auth::getProjectId(),$id);
            $photo= new Attachment();
            $fileName= $photo->where("reference_id",$reference_id[0]->reference_id);

            $status=$model->getStatus($id);

            $feedback=$model->getFeedback($id);
            if(count($_POST) > 0){
                $model->updateFeedback($id,$_POST['remark']);
                $this->redirect('clienttask/viewProgress/'.$id);
            }
            $this->view('viewClientTaskDetails',["rows"=>$data,'task'=>$sub_task,"photo"=>$fileName,"feedback"=>$feedback,'status'=>$status]);
        }

    }
?>