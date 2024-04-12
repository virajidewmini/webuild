<?php

    //Manager members controller
    class Pmmember_search extends Controller{
        

        public function index($district = null, $r_id = null, $model_id = null)
	{
		if(!Auth::logged_in()){
			$this->redirect('/login');
		}

        $staff = new Staffs();
		
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
    
		$this->view('pmmember_search',[
            'rows1'=>$data,
            'r_id'=>$r_id,
            
        ]);
	}

    public function view_sup_details($id = null)
            {
                // code...
                if(!Auth::logged_in()){
                    $this->redirect('login');
                }
                $staff=new Staffs();
                $row = $staff->where('id',$id);

                
                
                
                $this->view('pmmember_add',[
                    'row'=>$row,
                ]);
            }

   

    }
?>