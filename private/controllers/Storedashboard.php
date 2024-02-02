<?php

    //Manager members controller
    class Storedashboard extends Controller{
        
        public function index()
    {
        $storedashboard = new Storedashboard1();
        $data = $storedashboard->findAll();
        $this->view('storekeeperdashboard', ['rows' => $data]);
    }
    }
?>