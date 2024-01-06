<?php

    //Manager materials controller
    class Pmmodification extends Controller{
        

        public function index()
        {
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }
            $pmi = Auth::getid();

            $modification = new Modification();
            $data = $modification->where('user_id',2);

            $def = new Def();
            $data1 = $def->where('id',1);



            $this->view('pmmodification',[
                'row'=>$data,
                'row1'=>$data1,
            ]);
        
        }

    }
?>