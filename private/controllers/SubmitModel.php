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
                    'ul_street' => $_POST['street'],
                    'ul_town' => $_POST['town'],
                    'ul_district' => $_POST['district'],
                    'ul_area' => $_POST['area']
                ];

                $modification_id = uniqid();
                $_POST['id'] = $modification_id;

                $living_modification= [
                    'modification_id'=>$modification_id,
                    'tile_id'=>$_POST['livingRoomTile'],
                    'paint_id'=>$_POST['livingRoomPaint']
                ];

                $dining_modification= [
                    'modification_id'=>$modification_id,
                    'tile_id'=>$_POST['diningRoomTile'],
                    'paint_id'=>$_POST['diningRoomPaint']
                ];

                
                $kitchen_modification= [
                    'modification_id'=>$modification_id,
                    'tile_id'=>$_POST['kitchenTile'],
                    'paint_id'=>$_POST['kitchenPaint']
                ];

                $bathroom_modification= [
                    'modification_id'=>$modification_id,
                    'tile_id'=>$_POST['bathroomTile'],
                    'paint_id'=>$_POST['bathroomPaint']
                ];

                
                $bedroom_modification= [
                    'modification_id'=>$modification_id,
                    'tile_id'=>$_POST['bedroomTile'],
                    'paint_id'=>$_POST['bedroomPaint']
                ];

                

                $exterior_modification= [
                    'modification_id'=>$modification_id,
                    'tile_id'=>$_POST['exteriorTile'],
                    'paint_id'=>$_POST['exteriorPaint']
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

                $modify_paint->setTable("living_modification");
                $modify_paint->insert($living_modification);

                $modify_paint->setTable("dining_modification");
                $modify_paint->insert($dining_modification);

                $modify_paint->setTable("kitchen_modification");
                $modify_paint->insert($kitchen_modification);

                $modify_paint->setTable("bathroom_modification");
                $modify_paint->insert($bathroom_modification);

                $modify_paint->setTable("bedroom_modification");
                $modify_paint->insert($bedroom_modification);

                $modify_paint->setTable("exterior_modification");
                $modify_paint->insert($exterior_modification);
                
            }

            $paintView=new Paint();
        
            $data=$paintView->where("type","INTERIOR");
            $data_kitchen=$paintView->where("type","KIT&BATH");
            $data_exterior=$paintView->where("type","EXTERIOR");

            $this->view('SubmitModel',['rows'=> $data, 'rows_exterior'=>$data_exterior, 'rows_kitchen'=>$data_kitchen]);
            
        }

    }
?>