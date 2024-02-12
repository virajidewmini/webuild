<?php

    class DailyProgressReport extends Controller{
        
        public function index(){

            $report= new ProgressReport();
            $data= $report->findAll();
            $this->view('ViewDPR',['rows'=> $data]);
        }

        public function add(){

            
            $this->view('UpdateDailyProgessReport');
        }

    }
?>