<?php

//home controller
    class Home extends Controller{

        public function index(){
         $homerating=new Homerating();
           $data=$homerating->getrating();
            

         
            
           $this->view('homeNewLanding',['rows'=> $data]);
            // $this->view('homeLanding',['rows'=> $data]);


        }


        public function houses(){
           $this->view('homepagehouses');
        }
        public function lands(){
            $this->view('homepagelands');
         }
         public function completedProjects(){
            $this->view('homeNewcompletedprojects');
         }
         public function staff(){
            $this->view('homeNewStaff');
         }



    }
?>