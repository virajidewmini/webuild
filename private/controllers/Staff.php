<?php

//staff controller
    class Staff extends Controller{

        public function index(){
            $staff=new A_Staff();
            
            //$arr=array ( "First_Name" => "Gaveesha", "Last_Name" => "Wick","NIC" =>"2999999" ,"Contact_Number"=> "071-9907865" ,"Address" => "blah","Username" => "nm","Email_Address"=>"mn@","Password" =>"hg","Confirm_Password" => "hg" );
            //$arr=array ( "First_Name" => "Gavee" );
            //$users->insert($arr);
            //$users->update(2,$arr);
           // $users->delete(1);

            $data=$staff->findAll();

            $this->view('staff',['rows'=>$data]);

        }

    }
?>


