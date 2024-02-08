<?php

    //coordinator dashboard controller
    class Coordinatorviewsuppliers extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $suppliers=new Suppliers();

            $data=$suppliers->findAll();

            $this->view('coordinatorviewsuppliers',['rows'=>$data]);
            
        }

        public function seemore($id = null){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $suppliers=new Suppliers();

            $data=$suppliers->where('id',$id);

            $this->view('coordinatorviewsuppliers.seemore',['rows'=>$data]);
            
        }

        

    }
?>