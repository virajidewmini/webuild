<?php

    //Manager materials controller
    class Pmmodification extends Controller{
        

        public function index($uid=null, $id=null,$mid=null,$price=null,$rate=null)
        {
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }
            // $pmi = Auth::getId();

            $kitchen = new Kitchen();
            $bathroom = new Bathroom();
            $living = new Living();
            $bedroom = new Bedroom();
            $dining = new Dining();
            $exterior = new Exterior();

            $project_request = new Project_requests();
            $quotation = new Project_Quotation();
            
            $data1 = $kitchen->where('modification_id',$mid);
            $data2 = $bathroom->where('modification_id',$mid);
            $data3 = $living->where('modification_id',$mid);
            $data4 = $bedroom->where('modification_id',$mid);
            $data5 = $dining->where('modification_id',$mid);
            $data6 = $exterior->where('modification_id',$mid);

            $data7 = $kitchen->where('modification_id','default');
            $data8 = $bathroom->where('modification_id','default');
            $data9 = $living->where('modification_id','default');
            $data10 = $bedroom->where('modification_id','default');
            $data11 = $dining->where('modification_id','default');
            $data12 = $exterior->where('modification_id','default');

            if( $_SERVER['REQUEST_METHOD'] =='POST'){
                if($project_request->validate($_POST)){
                    
                    $arr['total_amount']=$_POST['new_price'];
                    $arr['user_id']=$uid;
                    $arr['request_id']=$id;
                    $arr['status'] = 'Pending';
                    $arr['created_date'] = date("Y-m-d");
                    $quotation->insert($arr);

                    $arr1['status'] = 'Done';
                    $project_request->update($id,$arr1);

                    $this->redirect('pmdashboard');
                }
                }




            $this->view('pmmodification',[
                'price'=>$price,

                'rowk'=>$data1,
                'rowba'=>$data2,
                'rowl'=>$data3,
                'rowbe'=>$data4,
                'rowd'=>$data5,
                'rowe'=>$data6,

                'drowk'=>$data7,
                'drowba'=>$data8,
                'drowl'=>$data9,
                'drowbe'=>$data10,
                'drowd'=>$data11,
                'drowe'=>$data12,
            ]);
        
        }

    }
?>