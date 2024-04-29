<?php

    //coordinator dashboard controller
    class Login extends Controller{
        
        public function index(){

            //code
            $errors = array();

            if (count($_POST)>0){
                $user=new Users();
                if($row=$user->where('email',$_POST['email'])){
                    $row = $row[0];
                    if(password_verify($_POST['password'],$row->password)){
                        
                        
                        
                        Auth::authenticate($row);
                        $_SESSION['role'] = 'Client';
                        
                        if ($_SESSION['role'] == 'Client'){

                            if($_SESSION['model_id']==NULL){
                                $this->redirect('/clientdashboard');
                            }
                            else{
                                $this->redirect('/submitModel');
                            }
                            
                        }
                        
                             $this->redirect('/home');
                        
                    }
                   
                }
                $errors['email']="Wrong email or password";                   
            }
            

            $this->view('login',[
                'errors'=>$errors,
            ]);
        }

    }
?>