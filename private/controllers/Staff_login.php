<?php

    //coordinator dashboard controller
    class Staff_login extends Controller{
        
        public function index(){

            //code
            $errors = array();

            if (count($_POST)>0){

                $staff = new Staffs();
                if($row=$staff->where('email',$_POST['email'])){
                    $row = $row[0];
                    if(password_verify($_POST['password'],$row->password)){
                        Auth::authenticate($row);
                        if (Auth::getRole() == 'Project Manager'){
                            $this->redirect('/pmdashboard');
                        }
                        if (Auth::getRole() == 'Project Coordinator'){
                            $this->redirect('/coordinatordashboard');
                        }
                        if (Auth::getRole() == 'Admin'){
                            $this->redirect('/admin');
                        }
                        $this->redirect('/home');
                    }
                   
                }
                $errors['email']="Wrong email or password";                   
            }
            

            $this->view('staff_login',[
                'errors'=>$errors,
            ]);
        }

    }
?>