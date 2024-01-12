<?php

    //Manager materials controller
    class Pmmodification extends Controller{
        

        public function index()
        {
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }
            $pmi = Auth::getid();

            $kitchen = new Kitchen();
            $bathroom = new Bathroom();
            $living = new Living();
            $bedroom = new Bedroom();
            $dining = new Dining();
            $exterior = new Exterior();
            
            $data1 = $kitchen->where('modification_id','apple123');
            $data2 = $bathroom->where('modification_id','apple123');
            $data3 = $living->where('modification_id','apple123');
            $data4 = $bedroom->where('modification_id','apple123');
            $data5 = $dining->where('modification_id','apple123');
            $data6 = $exterior->where('modification_id','apple123');

            $data7 = $kitchen->where('modification_id','default');
            $data8 = $bathroom->where('modification_id','default');
            $data9 = $living->where('modification_id','default');
            $data10 = $bedroom->where('modification_id','default');
            $data11 = $dining->where('modification_id','default');
            $data12 = $exterior->where('modification_id','default');




            $this->view('pmmodification',[
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