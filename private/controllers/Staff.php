<?php

//staff controller
    class Staff extends Controller{

        public function index(){

            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $staff=new Staffs();

            $data=$staff->findAll();

            $this->view('staff',['rows'=>$data]);

        }

        public function add(){
            
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $errors=array();

            if (count($_POST)>0){

                $staff=new Staffs();

                if($staff->validate3($_POST)){

                    $_POST['joineddate'] = date("Y-m-d H:i:s");
                    $_POST['password']=$_POST['nic'];
                    $email=$_POST['email'];
                    // $name=$_POST['firstname'];
                    // print_r($name);
                    $staff->insert($_POST);
                    // print_r($_POST['email']);

                    $this->redirect("Staff/emailstaff/$email");

                }else{

                    //errors
                    $errors = $staff->errors;
                }
            }


            $this->view('staff.add',[
                'errors'=>$errors
            ]);
        }

        public function edit($id=null){
            if(!Auth::logged_in()){
                $this->redirect('/login');
            }
            $id=$_GET["id"];


            $staff=new Staffs();

            $errors=array();        
            if (count($_POST)>0){
                if($staff->validate2($_POST)){

                $staff->update($id,$_POST);
                

                $this->redirect('staff');

                 }else{

                    //errors
                    $errors = $staff->errors;
                }
            }
            $row = $staff->where('id',$id);
            $this->view('staff.edit',[
                'row'=>$row,
                'errors'=>$errors,
            ]);
        }

        public function delete($id=null){
            
            //code
            if(!Auth::logged_in()){
                $this->redirect('/login');
              
            }


            $staff=new Staffs();

            $errors=array();            
            if (count($_POST)>0){
                $staff->delete($id,$_POST);
                $this->redirect('staff');   
            }
            $row = $staff->where('id',$id);
           
            
            $this->view('staff.delete',[
                'row'=>$row,
                'errors'=>$errors,
            ]);
        }


        public function emailstaff($email){
           
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            //print_r($email);
            // $data["supplier"]=$supplier;
            $data["email"]=$email;
            // $data["name"]=$name;

            $data["subject"]="Login Paasword Information";
            $data["message"]="Use your NIC number as the password. And once loggedin change it.";
            // $data["reqID"]=$reqID;

            
          //$this->view('coordinatorviewmaterialrequests.emailsupplier');
            $this->view('adminemailstaff',['rows'=>$data]);
        }
    }