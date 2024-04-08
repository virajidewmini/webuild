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


        public function seemore($id = null){
            // print_r("blah");
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();
            $data=$complaint->viewComplanitDetail($id);
            $this->view('coordinatorcomplaints.seemore',['row'=>$data]);
            
        }

        public function addremark($id = null){
            
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();
   
            if (count($_POST)>0){

                //for poor comm and other complaints only
                if(!($_POST['remark']==NULL)  && ($_POST['type'] == "other"   ||  $_POST['type']=="Poor Communication") ){
                   
                    $_POST['status'] = "Notified";
                    print_r($_POST);
                }
                $complaint->update($id,$_POST);
                $this->redirect('coordinatorviewcomplaints');                 
            }
            $row = $complaint->where('id',$id);
            $this->view('coordinatorviewcomplaints.addremark',[
                'row'=>$row,
            ]);
            
        }

        public function notify($id = null){
        
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $notification = new Notifications();

           

            if (count($_POST)>0){

                $row['date'] = date("Y-m-d H:i:s");
                $row['message'] = "Client complaint on project id " . $_POST['project_id'] ." for " . $_POST['type'];
                
                $staff_id= $notification->getStaffID($_POST['project_id'],$_POST['type']);

                if($_POST['type']=="Quality of photograph"|| $_POST['type']=="Quality of workmanship and materials" ){
                    $row['staff_id'] = $staff_id[0]->supervisor_id;
                }
                if($_POST['type']=="Construction project delay "){
                    $row['staff_id'] = $staff_id[0]->manager_id;
                }

                $notification->insert($row);


                //updating complaint status
                $notification->setState($_POST['id']);
                $this->redirect("coordinatorviewcomplaints");
               
            }            
        }

        //view past compalints
        public function past(){
            if(!Auth::logged_in()){
                $this->redirect('/staff_login');
            }
            $complaint=new C_Complaint();

            $data['Qualiy_of_Photographs']=$complaint->getPastPhotographComplaints();
            $data['being_delayed']=$complaint->getPastBeingDelayedComplaints();
            $data['Workmanship_&_Materials']=$complaint->getPastWorkmanshipAndMaterialsComplaints();
            $data['Poor_Communication']=$complaint->getPastPoorCommunicationComplaints();
            $data['Other']=$complaint->getPastOtherComplaints();
            
            $this->view('coordinatorcomplaints.past',['rows'=>$data]);
            
        }
        
       
    }
?>