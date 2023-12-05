<?php

//staff controller
    class Staff extends Controller{

        public function index(){

            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $staff=new A_Staff();

            $data=$staff->findAll();

            $this->view('staff',['rows'=>$data]);

        }

        public function add(){
            
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $errors=array();

            if (count($_POST)>0){

                $staff=new A_Staff();

                if($staff->validate($_POST)){

                    $_POST['joineddate'] = date("Y-m-d H:i:s");
                    $staff->insert($_POST);

                    $this->redirect('staff');

                }else{

                    //errors
                    $errors = $staff->errors;
                }
            }


            $this->view('staff.add',[
                'errors'=>$errors
            ]);
        }

        public function edit($staffid=null){
            
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }


            $staff=new A_Staff();

            $errors=array();
            $staffid=$_GET["staffid"];



            if ($staffid==""){

                if($staff->validate($_POST)){

                    $staff->update($staffid,$_POST);

                    $this->redirect('/staff');

                }else{

                    //errors
                    $errors = $staff->errors;
                }
            }
            $row = $staff->where('staffid',$staffid);
        
            if(!$row){
                $row=(object)[];
                $row->staffid='';
            }

            $this->view('staff.edit',[
                'row'=>$row,
                'errors'=>$errors,
            ]);
        }

        public function delete($staffid=null){
            
            //code
            if(!Auth::logged_in()){
                $this->redirect('/login');
              
            }


            $staff=new A_Staff();

            $errors=array();
           
            if (count($_POST)>0){

                $staff->delete($staffid,$_POST);
                $this->redirect('staff');
               
            }
            $row = $staff->where('staffid',$staffid);
            
            $this->view('staff.delete',[
                'row'=>$row,
                'errors'=>$errors,
            ]);
        }
    }