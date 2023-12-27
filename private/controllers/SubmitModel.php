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

                $living_paint_modification= [
                    'type'=>"LIVING_ROOM_PAINT",
                    'selection'=>$_POST['livingRoomPaint']
                ];

                $dining_paint_modification= [
                    'type'=>"DINING_ROOM_PAINT",
                    'selection'=>$_POST['diningRoomPaint']
                ];

                $kitchen_paint_modification= [
                    'type'=>"KITCHEN_PAINT",
                    'selection'=>$_POST['kitchenPaint']
                ];

                $bathroom_paint_modification= [
                    'type'=>"BATHROOM_PAINT",
                    'selection'=>$_POST['bathroomPaint']
                ];

                $bedroom_paint_modification= [
                    'type'=>"BEDROOM_PAINT",
                    'selection'=>$_POST['bedroomPaint']
                ];

                $exterior_paint_modification= [
                    'type'=>"EXTERIOR_PAINT",
                    'selection'=>$_POST['exteriorPaint']
                ];



                $living_tile_modification= [
                    'type'=>"LIVING_ROOM_PAINT",
                    'selection'=>$_POST['livingRoomPaint']
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
                $modify_paint = new Modification();
    
                $data->insert($userData);
                $lands->insert($landData);
                $modify_paint->insert($living_paint_modification);
                $modify_paint->insert($dining_paint_modification);
                $modify_paint->insert($kitchen_paint_modification);
                $modify_paint->insert($bathroom_paint_modification);
                $modify_paint->insert($bedroom_paint_modification);
                $modify_paint->insert($exterior_paint_modification);
            }

            $paintView=new Paint();
        
            $data=$paintView->where("type","INTERIOR");
            $data_kitchen=$paintView->where("type","KIT&BATH");
            $data_exterior=$paintView->where("type","EXTERIOR");

            $this->view('SubmitModel',['rows'=> $data, 'rows_exterior'=>$data_exterior, 'rows_kitchen'=>$data_kitchen]);
            
        }

    }
?>