<?php

use Respect\Validation\Validator as v;

    class SubmitModel extends Controller{
        
        public function index(){

            if(!Auth::logged_in()){
                $this->redirect('/login');
            }


            $paintView=new Paint();
            $data1=$paintView->where("type","INTERIOR");
            $data_kitchen=$paintView->where("type","KIT&BATH");
            $data_exterior=$paintView->where("type","EXTERIOR");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                

                $minValue=40;
                
                $occupationValidator = v::notEmpty()->stringType()->length(null, 255);
                $streetValidator = v::notEmpty()->stringType()->length(null, 20); 
                $areaValidator = v::notEmpty()->intVal()->between($minValue, 160);
        
                $errors = [];

                if (! isset($_POST['salary'])) {
                    $errors['type'] = 'Please select your salary ';
                }

                if (! isset($_POST['district'])) {
                    $errors['type'] = 'Please select your district ';
                }

                if (! isset($_POST['town'])) {
                    $errors['type'] = 'Please select your town ';
                }

                if (! isset($_POST['type'])) {
                    $errors['type'] = 'Please select payment plan type ';
                }

                

                if (! $occupationValidator->validate($_POST['occupation'])) {
                    $errors['occupation'] = 'Occupation must be a string with maximum length 255 and can not empty';
                }

                if (! $streetValidator->validate($_POST['street'])) {
                    $errors['street'] = 'Street must be a maximum length 20 and can not empty';
                }

                if (! $areaValidator->validate($_POST['area'])) {
                    $errors['area'] = 'Land area must be a numeric value and maximum size is 160 perch and minimum size is also considered';
                }
                
    

                if (empty($errors)) {    
                    
                    $modification_id = uniqid();

                    $model = new UploadModel();
                    $userData = [
                        'user_id'=>Auth::id(),
                        'occupation' => $_POST['occupation'],
                        'salary' => $_POST['salary'],
                        'modification_id'=>$modification_id,
                    ];

                    
        
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


                    $ProjectRequest=new Project_requests();

                    $request=[
                        'user_id'=>Auth::id(),
                        'model_id'=>$_SESSION['model_id'],
                        'modification_id'=>$modification_id,
                        'payment_plan_id'=>(int)$_POST['type'],
                        'date'=>date('Y-m-d'),
                        'status'=>"Modified",
                    ];
                
                    $ProjectRequest->insert($request);

                    $uploadedFiles = $model->uploadFiles($_FILES['files']);
                    $i = 0;
                    foreach ($uploadedFiles as $file) {
                        var_dump($uploadedFiles);
                        
                        if ($i == 0) {
                            $attachment_data= [
                                'reference_id'=>$modification_id,
                                'file_name' => $file,
                                'attachment_type'=> "SALARY"
                            ];
                        }elseif ($i ==1){
                            $attachment_data= [
                                'reference_id'=>$modification_id,
                                'file_name' => $file,
                                'attachment_type'=> "LANDPHOTO"
                            ];
                        }else{
                            $attachment_data= [
                                'reference_id'=>$modification_id,
                                'file_name' => $file,
                                'attachment_type'=> "LANDBLOCK"
                            ];
                        }


                        $attachment_model = new Attachment();
                        $attachment_model->insert($attachment_data);
                        $i++;
                        
                    }

                    $data = new UserData();
                    $lands = new UserLand();
                    
        
                    $data->insert($userData);
                    $lands->insert($landData);

                    $user=new Staffs();
                    $coordinator=$user->where("role","Project Coordinator");

                    $request_id=new Project_requests();
                    $getRequest=$request_id->where("modification_id",$modification_id);


                    $notification=new Notifications();
                    $requestNotification=[
                        'date'=>date('Y-m-d'),
                        'staff_id'=>$coordinator[0]->id,
                        'message'=>"New Project Request Submitted",
                        'status'=>"Unseen",
                        'type'=>'project request',
                        'msg_id'=>$modification_id,
                        'type'=>'project request',
                        'msg_id'=>$getRequest[0]->id,
                    ];

                    $notification->insert($requestNotification);
                    $this->redirect('clientdashboard');
                    
                }else{
                    $this->view('SubmitModel',['rows'=> $data1, 'rows_exterior'=>$data_exterior, 'rows_kitchen'=>$data_kitchen,'errors' => $errors]);
                }

            }

            if (!isset($errors)) {
                $this->view('SubmitModel',['rows'=> $data1, 'rows_exterior'=>$data_exterior, 'rows_kitchen'=>$data_kitchen]);
            }
            
            
        }

    }
?>