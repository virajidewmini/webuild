<?php

    class SubmitModel extends Controller{
        
        public function index(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $model = new UploadModel();
                $userData = [
                    'occupation' => $_POST['occupation'],
                    'salary' => $_POST['salary']
                    
                ];

                $modification_id = uniqid();
    
                $landData = [
                    'ul_street' => $_POST['street'],
                    'ul_town' => $_POST['town'],
                    'ul_district' => $_POST['district'],
                    'ul_area' => $_POST['area'],
                    'user_id'=>Auth::id(),
                    'modification_id'=>$modification_id,
                ];

                
                $_POST['id'] = $modification_id;


                $modify_paint = new Modification();

                if (isset($_POST['livingRoomTile']) || isset($_POST['livingRoomPaint'])) {
                   
                    
                    $living_modification= [
                        'modification_id'=>$modification_id,
                        'tile_id'=>$_POST['livingRoomTile'] ?? null,
                        'paint_id'=>$_POST['livingRoomPaint'] ?? null
                    ];
                    $modify_paint->setTable("living_modification");
                    $modify_paint->insert($living_modification);
                }

                if (isset($_POST['diningRoomTile']) || isset($_POST['diningRoomPaint'])) {
                    
                    $dining_modification= [
                        'modification_id'=>$modification_id,
                        'tile_id'=>$_POST['diningRoomTile'] ?? null,
                        'paint_id'=>$_POST['diningRoomPaint'] ?? null
                    ];
                    
                    $modify_paint->setTable("dining_modification");
                    $modify_paint->insert($dining_modification);
                }

                if (isset($_POST['kitchenTile']) || isset($_POST['kitchenPaint'])) {
                    

                    $kitchen_modification= [
                        'modification_id'=>$modification_id,
                        'tile_id'=>$_POST['kitchenTile'] ?? null,
                        'paint_id'=>$_POST['kitchenPaint'] ?? null
                    ];
                    
                    $modify_paint->setTable("kitchen_modification");
                    $modify_paint->insert($kitchen_modification);
                    
                }

                if (isset($_POST['bathroomTile']) || isset($_POST['bathroomPaint'])) {
                    

                    $bathroom_modification= [
                        'modification_id'=>$modification_id,
                        'tile_id'=>$_POST['bathroomTile'] ?? null,
                        'paint_id'=>$_POST['bathroomPaint'] ?? null
                    ];
                    
                    $modify_paint->setTable("bathroom_modification");
                    $modify_paint->insert($bathroom_modification);
                    
                    
                }

                if (isset($_POST['bedroomTile']) || isset($_POST['bedroomTile'])) {
                    

                    $bedroom_modification= [
                        'modification_id'=>$modification_id,
                        'tile_id'=>$_POST['bedroomTile'] ?? null,
                        'paint_id'=>$_POST['bedroomPaint'] ?? null
                    ];
                    
                    $modify_paint->setTable("bedroom_modification");
                    $modify_paint->insert($bedroom_modification);      
                    
                }

                if (isset($_POST['exteriorTile']) || isset($_POST['exteriorPaint'])) {
                    

                    $exterior_modification= [
                        'modification_id'=>$modification_id,
                        'tile_id'=>$_POST['exteriorTile'] ?? null,
                        'paint_id'=>$_POST['exteriorPaint'] ?? null
                    ];
                    
                    $modify_paint->setTable("exterior_modification");
                    $modify_paint->insert($exterior_modification);
                    
                    
                }


                $ProjectRequest=new ProjectRequest();

                $request=[
                    'user_id'=>Auth::id(),
                    'model_id'=>1,
                    'modification_id'=>$modification_id,
                    'payment_plan_id'=>(int)$_POST['type'],
                    'date'=>date('Y-m-d'),
                    'status'=>"Modified",
                ];
               
                $ProjectRequest->insert($request);

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
                
            }
            
            $paintView=new Paint();
        
            $data=$paintView->where("type","INTERIOR");
            $data_kitchen=$paintView->where("type","KIT&BATH");
            $data_exterior=$paintView->where("type","EXTERIOR");

            $this->view('SubmitModel',['rows'=> $data, 'rows_exterior'=>$data_exterior, 'rows_kitchen'=>$data_kitchen]);
            
        }

    }
?>