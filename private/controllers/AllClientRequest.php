<?php

    class AllClientRequest extends Controller{
        
        public function index(){
            $model=new Client();
            $data=$model->where("user_id",Auth::id());
            $this->view('ViewAllRequest',['rows'=>$data]);
        }

    }
?>