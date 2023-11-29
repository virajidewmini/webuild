<?php

//home controller
    class Home extends Controller{

        public function index(){
        //     //$db = new Database(); -- VIraji
        //     $complaints=new C_Complaint();
        //     //$complaints=$this->load_model('C_Complaint');-- Me
        //    // $data = $db->query("select * from complaint"); Viraji

        //    $data=$complaints->findAll();
        //    //$data=$complaints->query("select * from complaint");-- VIraji
            
            
        //     $this->view('home',['rows'=> $data]);




            //Users-->Gaveesha

            $users=new Users();
            
            //$arr=array ( "First_Name" => "Gaveesha", "Last_Name" => "Wick","NIC" =>"2999999" ,"Contact_Number"=> "071-9907865" ,"Address" => "blah","Username" => "nm","Email_Address"=>"mn@","Password" =>"hg","Confirm_Password" => "hg" );
            //$arr=array ( "First_Name" => "Gavee" );
            //$users->insert($arr);
            //$users->update(2,$arr);
            $users->delete(2);

            $data=$users->findAll();

            $this->view('user',['rows'=> $data]);



        }

    }
?>