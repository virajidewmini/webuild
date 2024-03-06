<?php

    //Manager members controller
    class Storekeeperdashboard extends Controller{
        
        public function index()
    {
        $storedashboard = new Storedashboard1();
        $data = $storedashboard->findAll();
        $this->view('storekeeperdashboard', ['rows' => $data]);
    }
    }
?>