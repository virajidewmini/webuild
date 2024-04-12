<?php   

    //coordinator dashboard controller
    class Coordinatorviewmanagers extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $view_managers=new View_Managers();

            $data['managers']=$view_managers->seeAllManagers();

            $this->view('coordinatorviewmanagers',['rows'=>$data]);
            
        }

        public function seeprojects($id=null){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            
            $view_managers=new View_Managers();

            $data['managers']=$view_managers->seeAllManagers();
            $data['projects']=$view_managers->seeAllProjects($id);

            $this->view('coordinatorviewmanagers.seeprojects',['rows'=>$data]);
            
        }

    }
?>