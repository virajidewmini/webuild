<?php

    class Progress extends Controller{
        
        public function index(){

            $this->view('UpdatePhotograph');
        }

        public function viewPhotograph($id){
            $project_id=1;
            $model=new AllocateTask();
            $data=$model->getMainTask($id);

            $model= new Photograph();
            $reference_id= $model->getReferenceId($project_id,$id);

           
            $photo= new Attachment();
            $fileName= $photo->where("reference_id",$reference_id[0]->reference_id);

            $this->view('ViewPhoto',["rows"=>$data,"photo"=>$fileName,"id"=>$id]);
            

        }

        public function addPhoto($id){
            if(count($_POST) > 0){

                $model = new UploadModel();
                

               
                $complaint_id = uniqid();
               
               

                $uploadedFiles = $model->uploadFiles($_FILES['files']);
                foreach ($uploadedFiles as $file) {
                    $attachment_data= [
                        'reference_id' => $complaint_id,
                        'file_name' => $file,
                        'attachment_type'=> "HELLO"
                    ];
                    $attachment_model = new Attachment();
                    $attachment_model->insert($attachment_data);
                }

                //  $this->redirect('clientcomplaint');
            }
           
            $this->view('UploadPhotograph');
        }

        
    }
?>