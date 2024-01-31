<?php

    //Admin dashboard controller
    class Admindashboard extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }

            $staffs=new Staffs();

            $data['all']=$staffs->findAllEmployees();
            $data['sup']=$staffs->findEmployeeByRole('Supervisor');
            $data['man']=$staffs->findEmployeeByRole('Project Manager');
            $data['coo']=$staffs->findEmployeeByRole('Project Coordinator');
            $data['sk']=$staffs->findEmployeeByRole('Store Keeper');

            
            $complaint=new C_Complaint();
            //get complaints in the month
            if(isset($_POST['month'])){
                $month = $_POST['month'];
                $data['QOP'] = $complaint->getComplaintsInMonth($month,"Quality of photograph");
                $data['CPD'] = $complaint->getComplaintsInMonth($month,"Construction project delay ");
                $data['QWM'] = $complaint->getComplaintsInMonth($month,"Quality of workmanship and materials");
                $data['PC'] = $complaint->getComplaintsInMonth($month,"Poor Communication");
                $data['O'] = $complaint->getComplaintsInMonth($month,"other ");
            }
            else{
                $data['QOP'] = $complaint->getComplaintsInMonth("January","Quality of photograph");
                $data['CPD'] = $complaint->getComplaintsInMonth("January","Construction project delay ");
                $data['QWM'] = $complaint->getComplaintsInMonth("January","Quality of workmanship and materials");
                $data['PC'] = $complaint->getComplaintsInMonth("January","Poor Communication");
                $data['O'] = $complaint->getComplaintsInMonth("January","other ");
            }
            $this->view('admindashboard',['rows'=>$data]);
        }



        // public function getMonth(){
        //     if(!Auth::logged_in()){
        //         $this->redirect('/staff_login');
        //     }

        //     $complaint=new C_Complaint();
   
        //     if (count($_POST)>0){

        //         print_r($_POST);
        //         $complaint->getComplaintsInMonth($_POST,'Quality of phootograph');
        //         $this->redirect('coordinatorviewcomplaints');                 
        //     }
            
        //     $this->view('coordinatorviewcomplaints.addremark',[
        //         'row'=>$row,
        //     ]);
        // }

    }
?>