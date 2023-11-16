<?php

//home controller
    class Home extends Controller{

        public function index(){
            // $db = new Database();
            
            // $data = $db->query("select * from test");
            
            
            $this->view('home',['rows'=> $data]);
        }

    }
?>