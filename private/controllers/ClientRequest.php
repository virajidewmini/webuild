<?php

    class ClientRequest extends Controller{
        
        public function index($id){
            $model=new Client();

            $data=$model->where("id",$id);

            $model_id=$data[0]->model_id;

            $module=new Models();
            $model_name=$module->where("id",$model_id);
          

            $user=new UserData();
            $userData=$user->where("user_id",Auth::id());


            $modification_id=$data[0]->modification_id;
            $land=new User_land();
            $user_land=$land->where("modification_id",$modification_id);
            $plan_id=$data[0]->payment_plan_id;

            $living=new Living();
            $dining=new Dining();
            $kitchen=new Kitchen();
            $bathroom=new Bathroom();
            $bedroom=new Bedroom();
            $exterior=new Exterior();

            $livingModification=$living->where("modification_id",$modification_id);
            $diningModification=$dining->where("modification_id",$modification_id);
            $kitchenModification=$kitchen->where("modification_id",$modification_id);
            $bathroomModification=$bathroom->where("modification_id",$modification_id);
            $bedroomModification=$bedroom->where("modification_id",$modification_id);
            $exteriorModification=$exterior->where("modification_id",$modification_id);

            $attachment=new Attachment();
            $salary=$attachment->getAttachment($modification_id,"SALARY");
            $landPhoto=$attachment->getAttachment($modification_id,"LANDPHOTO");
            $landBlock=$attachment->getAttachment($modification_id,"LANDBLOCK");

            $Paint=new Paint();
            if($livingModification){
                $livingPaint=$Paint->where("id",$livingModification[0]->paint_id);
            }else{
                $livingPaint=NULL;
            }
            if($diningModification){
                $diningPaint=$Paint->where("id",$diningModification[0]->paint_id);
            }else{
                $diningPaint=NULL;
            }
            if($kitchenModification){
                $kitchenPaint=$Paint->where("id",$kitchenModification[0]->paint_id);
            }else{
                $kitchenPaint=NULL;
            }
            if($bathroomModification){
                $bathroomPaint=$Paint->where("id",$bathroomModification[0]->paint_id);
            }else{
                $bathroomPaint=NULL;
            }
            if($bedroomModification){
                $bedroomPaint=$Paint->where("id",$bedroomModification[0]->paint_id);
            }else{
                $bedroomPaint=NULL;
            }
            if($exteriorModification){
                $exteriorPaint=$Paint->where("id",$exteriorModification[0]->paint_id);
            }else{
                $exteriorPaint=NULL;
            }
  
            $package=new Payment_packages();
            $pack=$package->where("id",$plan_id);
            $this->view('ViewProjectRequest',['id'=>$id,'model'=>$model_name,'pack'=>$pack,'land'=>$user_land,'userData'=>$userData,
                'living'=>$livingModification,'livingPaints'=>$livingPaint,
                'dining'=>$diningModification,'diningPaints'=>$diningPaint,
                'kitchen'=>$kitchenModification,'kitchenPaints'=>$kitchenPaint,
                'bathroom'=>$bathroomModification,'bathroomPaints'=>$bathroomPaint,
                'bedroom'=>$bedroomModification,'bedroomPaints'=>$bedroomPaint,
                'exterior'=>$exteriorModification,'exteriorPaints'=>$exteriorPaint,
                'salary'=>$salary,'photo'=>$landPhoto,'block'=>$landBlock
            ]);
        }

    }
?>