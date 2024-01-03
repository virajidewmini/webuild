<?php

//user controller
    class User extends Controller{

        public function index(){

            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $users=new Users();
            
            //$arr=array ( "firstname" => "Viraji", "lastname" => "Dewmini","nic" =>"200199999988" ,"contactnumber"=> "0719907865" ,"address" => "Galle","email"=>"viraji@gmail.com","password" =>"virajidev" );
         //$arr=array ( "firstname" => "Gavee" );
            //$arr=array ( "First_Name" => "Gavee" );
            //$users->insert($arr);
            //$users->update(40,$arr);
           //$users->delete(40);

            $data=$users->findAll();

            $this->view('user',['rows'=>$data]);

        }

    }
?>