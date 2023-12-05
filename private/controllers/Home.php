<?php

//home controller
    class Home extends Controller{

        public function index(){


            if(!Auth::logged_in()){
                $this->redirect('/login');
            }


            //$db = new Database(); -- VIraji
            $complaints=new C_Complaint();
            //$complaints=$this->load_model('C_Complaint');-- Me
           // $data = $db->query("select * from complaint"); Viraji

           $data=$complaints->findAll();
           //$data=$complaints->query("select * from complaint");-- VIraji
            
            
            $this->view('home',['rows'=> $data]);





        //     //Users-->Gaveesha

        //     $users=new Users();
            
        //    // $arr=array ( "firstname" => "Gaveesha", "lastname" => "Wick","nic" =>"2999999" ,"contactnumber"=> "071-9907865" ,"address" => "blah","username" => "nm","email"=>"mn@","password" =>"hg" );
        //    // $arr=array ( "First_Name" => "Gavee" );
        //     //$users->insert($arr);
        //     // $users->update(2,$arr);
        //     // $users->delete(1);

        //     $data=$users->findAll();

        //     $this->view('user',['rows'=> $data]);

        //     $this->view('home');

        }

    }
?>