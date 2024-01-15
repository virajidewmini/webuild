<?php

    class AllCoworkers extends Controller{
        
        public function index(){
            $worker=new Coworkers();
            $data=$worker->findAll();

            $this->view('ViewCoworkers',['worker'=>$data]);
        }

        public function add(){
            $this->view('AddCoworker');
        }

        

   

    

        
    }
?>