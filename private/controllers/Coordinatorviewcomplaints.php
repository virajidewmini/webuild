<?php

    //coordinator ViewComplaints
    class Coordinatorviewcomplaints extends Controller{
        
        public function index(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();

            $data['Qualiy_of_Photographs']=$complaint->getPendingPhotographComplaints();
            $data['being_delayed']=$complaint->getPendingBeingDelayedComplaints();
            $data['Workmanship_&_Materials']=$complaint->getPendingWorkmanshipAndMaterialsComplaints();
            $data['Poor_Communication']=$complaint->getPendingPoorCommunicationComplaints();
            $data['Other']=$complaint->getPendingOtherComplaints();
            
            $this->view('coordinatorcomplaints.pending',['rows'=>$data]);
            
        }

        

    }
?>