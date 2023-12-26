<?php

    class SubmitModel extends Controller{
        
        public function index(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $model = new UploadModel();
                $userData = [
                    'occupation' => $_POST['occupation'],
                    'salary' => $_POST['salary']
                    
                ];
    
                $landData = [
                    'street' => $_POST['street'],
                    'town' => $_POST['town'],
                    'district' => $_POST['district'],
                    'area' => $_POST['area']
                ];

                $uploadedFiles = $model->uploadFiles($_FILES['files']);
                foreach ($uploadedFiles as $file) {
                    $attachment_data_salary= [
                        'file_name' => $file,
                        'attachment_type'=> "SALARY"
                    ];
                    $attachment_data_land= [
                        'file_name' => $file,
                        'attachment_type'=> "LAND"
                    ];
                    $attachment_model = new Attachment();
                    $attachment_model->insert($attachment_data_salary);
                    $attachment_model->insert($attachment_data_land);
                }

                $data = new UserData();
                $lands = new UserLand();
    
                $data->insert($userData);
                $lands->insert($landData);
                
            }

            $paintView=new Paint();
            // $data=$paintView->findAll();
            $data=$paintView->where("type","INTERIOR");

            $this->view('SubmitModel',['rows'=> $data]);
        }

    }
?>