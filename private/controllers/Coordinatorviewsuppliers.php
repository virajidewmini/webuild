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

        public function add(){
            
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $errors=array();

            if (count($_POST)>0){

                $supplier=new Suppliers();

                if($supplier->validate($_POST)){

                    $supplier->insert($_POST);

                    $this->redirect('coordinatorviewsuppliers');

                }else{

                    //errors
                    $errors = $supplier->errors;
                }
            }


            $this->view('coordinatorviewsuppliers.add',[
                'errors'=>$errors
            ]);
        }

        public function edit($id=null){
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $supplier=new suppliers();

            $errors=array();        
            if (count($_POST)>0){
                if($supplier->validate2($_POST)){

                $supplier->update($id,$_POST);
                

                $this->redirect('coordinatorviewsuppliers');

                 }else{

                    //errors
                    $errors = $supplier->errors;
                }
            }
            $row = $supplier->where('id',$id);
            $this->view('coordinatorviewsuppliers.edit',[
                'row'=>$row,
                'errors'=>$errors,
            ]);
        }

        

    }
?>