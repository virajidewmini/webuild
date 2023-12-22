<?php

    //Manager members controller
    class Pmmember_search extends Controller{
        

        public function index()
	{
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}

        $project_detail = new Project_detail();
		

        if(isset($_GET['district'])){
            $district = $_GET['district'];
            $data = $project_detail->ssup($district);
        }
    
		$this->view('pmmember_search',['rows1'=>$data]);
	}

    public function view_sup_details($id = null)
            {
                // code...
                if(!Auth::logged_in()){
                    $this->redirect('login');
                }
                $project = new Projects();
                
                    
               if( $_SERVER['REQUEST_METHOD'] =='POST'){
                if($project->validate($_POST)){
                    
                    $arr['project_id']='2';
                    $arr['status']='Pending';
                    $arr['action'] = 'ongoing';
                    $project->insert($_POST);
                    $this->redirect('pmtask');
                }
                }
                $staff=new Staffs();
                $row = $staff->where('id',$id);
                
                
                $this->view('pmmember_add',[
                    'row'=>$row,
                ]);
            }

    }
?>