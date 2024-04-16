<?php

    class Progress extends Controller{
        
        public function index(){

            $this->view('UpdatePhotograph');
        }

        public function viewPhotograph($id){
            $project_id=Auth::getProjectId();
            $model=new AllocateTask();
            $data=$model->getMainTask($id);

            $model= new Photograph();
            $reference_id= $model->getReferenceId($project_id,$id);
            $fileName=null;

            if (!empty($reference_id)) {
                
                $photo= new Attachment();
                $fileName= $photo->where("reference_id",$reference_id[0]->reference_id);
            }
            
            $this->view('ViewPhoto',["rows"=>$data,"photo"=>$fileName,"id"=>$id]);
            

        }

        public function addPhoto($id){
            
            if($_SERVER['REQUEST_METHOD'] === 'POST') {

                $model = new UploadModel();

                
            
                $photograph=new Photograph();
                $reference_id= $photograph->getReferenceId(Auth::getProjectId(),$id);

                if (!empty($reference_id)) {  
                    $reference_id = $reference_id[0]->reference_id;
                } else {
                   
                    $reference_id = uniqid();
                    $data=[
                        'project_id'=>Auth::getProjectId(),
                        'task_id'=>$id,
                        'reference_id'=>$reference_id,
                    ];
                    $photograph->insert($data);
                }

               
                $uploadedFiles = $model->uploadFiles($_FILES['files']);
                foreach ($uploadedFiles as $file) {
                    $attachment_data= [
                        'reference_id' => $reference_id,
                        'file_name' => $file,
                        'attachment_type'=> "EVIDENCE"
                    ];
                    $attachment_model = new Attachment();
                    $attachment_model->insert($attachment_data);
                }

                  $this->redirect('task/'.Auth::getProjectId());
            }
           
            $this->view('UploadPhotograph');
        }

        public function delete($id=null){
           
            if(count($_POST) > 0){
                $attachment=new Attachment();
			    $attachment->delete($id);
                $this->redirect('task/'.Auth::getProjectId());

            }
            $this->view('DeleteComplaint');
        }

        
    }
?>