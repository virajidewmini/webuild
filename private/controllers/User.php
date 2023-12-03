<?php

//user controller
    class User extends Controller{

        public function index(){

            if(!Auth::logged_in()){
                $this->redirect('/login');
            }

            $users=new Users();
            
            //$arr=array ( "First_Name" => "Gaveesha", "Last_Name" => "Wick","NIC" =>"2999999" ,"Contact_Number"=> "071-9907865" ,"Address" => "blah","Username" => "nm","Email_Address"=>"mn@","Password" =>"hg","Confirm_Password" => "hg" );
            //$arr=array ( "First_Name" => "Gavee" );
            //$users->insert($arr);
            //$users->update(2,$arr);
           // $users->delete(1);

            $data=$users->findAll();

            $this->view('user',['rows'=>$data]);

        }

    }
?>