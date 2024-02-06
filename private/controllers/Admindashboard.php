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

            $requests=new Project_requests();

            $data['JANPR'] = $requests->getrequestsInMonth("January");
            $data['FEBPR'] = $requests->getrequestsInMonth("February");
            $data['MARPR'] = $requests->getrequestsInMonth("March");    
            $data['APRPR'] = $requests->getrequestsInMonth("April");
            $data['MAYPR'] = $requests->getrequestsInMonth("May");
            $data['JUNPR'] = $requests->getrequestsInMonth("June");
            $data['JULPR'] = $requests->getrequestsInMonth("July");
            $data['AUGPR'] = $requests->getrequestsInMonth("August");
            $data['SEPPR'] = $requests->getrequestsInMonth("September");    
            $data['OCTPR'] = $requests->getrequestsInMonth("October");
            $data['NOVPR'] = $requests->getrequestsInMonth("November");
            $data['DECPR'] = $requests->getrequestsInMonth("December");


            //$projects=new Projects();

            $data['FOG'] = $requests->getprojectsInMonth("ongoing","first");
            $data['SOG'] = $requests->getprojectsInMonth("ongoing","second");
            $data['TOG'] = $requests->getprojectsInMonth("ongoing","third");    
            $data['FOG'] = $requests->getprojectsInMonth("ongoing","fourth");

            $data['FRE'] = $requests->getprojectsInMonth("rejected","first");
            $data['SRE'] = $requests->getprojectsInMonth("rejected","second");
            $data['TRE'] = $requests->getprojectsInMonth("rejected","third");    
            $data['FRE'] = $requests->getprojectsInMonth("rejected","fourth");

            $data['FFI'] = $requests->getprojectsInMonth("finished","first");
            $data['SFI'] = $requests->getprojectsInMonth("finished","second");
            $data['TFI'] = $requests->getprojectsInMonth("finished","third");    
            $data['FFI'] = $requests->getprojectsInMonth("finished","fourth");



            $this->view('admindashboard',['rows'=>$data]);
        }



        

    }
?>