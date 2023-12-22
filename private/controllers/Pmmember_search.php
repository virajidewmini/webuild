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
        elseif(isset($_GET['district'])==''){
            $data = $project_detail->supAll();
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
                    
                    $id1 = $_POST['id'];
                    $arr['supervisor_id']=$_POST['supervisor_id'];
                    $arr['date']=$_POST['date'];
                    $arr['final_date']=$_POST['final_date'];
                    $arr['action'] = 'ongoing';
                    $project->update($id1,$arr);
                    $this->redirect('pmmember');
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