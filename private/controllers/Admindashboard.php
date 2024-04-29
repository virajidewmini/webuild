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


            //getting all complaints   

            
            $data["AllQP"]=$complaint->getComplaintCount('Quality and the number of photograph');
            $data["AllCP"]=$complaint->getComplaintCount('Construction project delay ');
            $data["AllQW"]=$complaint->getComplaintCount('Quality of workmanship and materials');
            $data["AllPC"]=$complaint->getComplaintCount('Poor Communication');
            $data["AllOT"]=$complaint->getComplaintCount('other ');
            $data["AllComp"]=$data["AllQP"][0]->total+ $data["AllCP"][0]->total+ $data["AllQW"][0]->total +$data["AllPC"][0]->total +$data["AllOT"][0]->total;




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

            $data['FOG'] = $requests->getprojectsInMonth("Ongoing","first");
            $data['SOG'] = $requests->getprojectsInMonth("Ongoing","second");
            $data['TOG'] = $requests->getprojectsInMonth("Ongoing","third");    
            $data['EOG'] = $requests->getprojectsInMonth("Ongoing","fourth");

            $data['FRE'] = $requests->getprojectsInMonth("Cancelled","first");
            $data['SRE'] = $requests->getprojectsInMonth("Cancelled","second");
            $data['TRE'] = $requests->getprojectsInMonth("Cancelled","third");    
            $data['ERE'] = $requests->getprojectsInMonth("Cancelled","fourth");

            $data['FFI'] = $requests->getprojectsInMonth("Completed","first");
            $data['SFI'] = $requests->getprojectsInMonth("Completed","second");
            $data['TFI'] = $requests->getprojectsInMonth("Completed","third");    
            $data['EFI'] = $requests->getprojectsInMonth("Completed","fourth");



            $this->view('admindashboard',['rows'=>$data]);
        }


        

    }
?>