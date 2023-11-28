<?php

//hProjectprofile controller
    class Projectprofile extends Controller{

        public function index(){
           
            $profiles=new P_Profile();
            
            $arr=array ( "ID" => 2, "CLientName" => "Naial", "ModelNumber" => 2370 ,"Modifiacations" => "Need walls to be white" );
            $profiles->insert($arr);
            // $profiles->update(id,$data);
            // $profiles->delete(id);

            $data=$profiles->findAll();

            $this->view('projectprofile',['rows'=> $data]);
        }

    }
?>
