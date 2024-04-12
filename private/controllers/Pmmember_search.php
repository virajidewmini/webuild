<?php

    //Manager members controller
    class Pmmember_search extends Controller{
        

        public function index($district = null, $p_id = null)
	{
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}

        $staff = new Staffs();
        $project = new Projects();
		
        if(isset($district)){
            $data = $staff->ssup($district);
        }
        elseif(isset($_GET['district'])){
            $district = $_GET['district'];
            $data = $staff->ssup($district);
        }
        else{
            $data = $staff->supAll();
        }

        if(isset($p_id)){
            $data1 = $project->where('id',$p_id);
        }
    
		$this->view('pmmember_search',[
            'rows1'=>$data,
            'row1'=>$data1,

        ]);
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
                    $arr['status'] = 'ongoing';
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

    public function view_sup_details_t_($id = null, $p_id = null)
            {
                // code...
                if(!Auth::logged_in()){
                    $this->redirect('login');
                }
                $project = new Projects();
                $row1 = $project->where('id',$p_id);
                    
               if( $_SERVER['REQUEST_METHOD'] =='POST'){
                if($project->validate($_POST)){
                    
                    $id1 = $_POST['id'];
                    $arr['supervisor_id']=$_POST['supervisor_id'];
                    $arr['date']=$_POST['date'];
                    $arr['final_date']=$_POST['final_date'];
                    $arr['status'] = 'ongoing';
                    $project->update($id1,$arr);
                    $this->redirect('pmmember');
                }
                }
                $staff=new Staffs();
                $row = $staff->where('id',$id);

                
                
                
                $this->view('pmmember_add',[
                    'row'=>$row,
                    'row1'=>$row1,
                ]);
            }

    }
?>