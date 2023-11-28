<?php

//hProjectprofile controller
    class Projectprofile extends Controller{

        public function index(){
           
            $profiles=new P_Profile();
            $data=$profiles->findAll();

            // $profiles->insert($data);
            // $profiles->update(id,$data);
            // $profiles->delete(id);


            $this->view('projectprofile',['rows'=> $data]);
        }

    }
?>
