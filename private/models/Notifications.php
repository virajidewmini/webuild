
<?php 
class Notifications extends Model{
    protected $table = "notifications";
    
    public function getStaffID($value,$type){



        $query="SELECT * FROM projects        
        WHERE projects.id = :value"; 
    

        // if($type=="Quality of photograph"){
        //     $query="SELECT projects.supervisor_id FROM projects        
        //     WHERE projects.id = :value"; 
        // }

        // if($type=="Construction project delay"){
        //     $query="SELECT projects.manager_id FROM projects        
        //     WHERE projects.id = :value"; 
        // }

        // elseif($type=="Quality of workmanship and materials"){
        //     $query="SELECT projects.supervisor_id FROM projects        
        //     WHERE projects.id = :value"; 
        // }
        

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }
    
    //for complaints
    public function setState($value){

        $query="UPDATE complaint set complaint.status='Notified'       
        WHERE complaint.id = :value"; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }


    //for payments
    public function setNotifiedStateForPayment($value){

        $query="UPDATE payments set payments.status='Notified'       
        WHERE payments.id = :value"; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    //for warning 
    public function setWarningStateForPayment($value){

        $query="UPDATE payments set payments.status='Warning'       
        WHERE payments.id = :value"; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    //for terminate
    public function setTerminateStateForPayment($value){

        $query="UPDATE payments set payments.status='Terminated'       
        WHERE payments.project_id = :value"; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    

    public function updateProjectRequestNotification($value){
        

        $query="UPDATE notifications set notifications.status='Seen'       
        WHERE notifications.msg_id = :value AND notifications.type='project request' "; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function updateComplaintNotification($value){
        

        $query="UPDATE notifications set notifications.status='Seen'       
        WHERE notifications.msg_id = :value AND notifications.type='complaint' "; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function updateInstallmentNotification($id){
        

        $query="UPDATE notifications set notifications.status='Seen'       
        WHERE notifications.msg_id = :id AND notifications.type='installment_reminder' "; 
        
        //return $this->query($query);
        return $this->query($query, [
            'id' => $id,
        ]);
    }

    public function updateRejectRequestNotification($id){
        

        $query="UPDATE notifications set notifications.status='Seen'       
        WHERE notifications.msg_id = :id AND notifications.type='pr_reject_co' "; 
        
        //return $this->query($query);
        return $this->query($query, [
            'id' => $id,
        ]);
    }

    public function getSupervisorComplaint($user_id){
        $query="select complaint.* from complaint inner join notifications where notifications.msg_id=complaint.id && notifications.staff_id=:user_id";
        $param=[
            'user_id'=>$user_id
        ];
        return $this->query($query,$param);

    }

    public function getSupervisorUnresolveComplaint($user_id){
        $query="select complaint.* from complaint inner join notifications where notifications.msg_id=complaint.id && notifications.staff_id=:user_id && complaint.status='Pending'";
        $param=[
            'user_id'=>$user_id
        ];
        return $this->query($query,$param);

    }

    public function getSupervisorUnresolveComplaintCount($user_id){
        $query="select COUNT(complaint.id) as pendingComplaintCount from complaint inner join notifications where notifications.msg_id=complaint.id && notifications.staff_id=:user_id && complaint.status='Pending'";
        $param=[
            'user_id'=>$user_id
        ];
        return $this->query($query,$param);

    }

    public function getSupervisorresolveComplaintCount($user_id){
        $query="select COUNT(complaint.id) as completeComplaintCount from complaint inner join notifications where notifications.msg_id=complaint.id && notifications.staff_id=:user_id && complaint.status='Complete'";
        $param=[
            'user_id'=>$user_id
        ];
        return $this->query($query,$param);

    }

    public function updateQuotaionNotification($value){
        

        $query="UPDATE notifications set notifications.status='Seen'       
        WHERE notifications.msg_id = :value AND notifications.type='quotation_pm_to_co' "; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }



    public function projectQuotationNotify()
    {
        $last_q_id = "";
        $query = "SELECT * FROM quotation ORDER BY id DESC LIMIT 1";
        $result = $this->query($query);

        $last_q_id = $result[0]->id;


        $msg_id = $last_q_id;



        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => 1,
            'message' => 'Create the quotation ID '.$msg_id,
            'status' => 'Unseen',
            'type' => 'quotation_pm_to_co',
            'msg_id' => $msg_id,
        ];

        return $notification_data;
    }

    public function materialRequest()
    {
        $last_r_id = "";
        $query = "SELECT * FROM material_requests ORDER BY id DESC LIMIT 1";
        $result = $this->query($query);

        $last_r_id = $result[0]->request_id;


        // foreach data
        $errors = 0;
        $msg_id = $last_r_id;



        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => 4,
            'message' => 'Material request ID '.$msg_id,
            'status' => 'Unseen',
            'type' => 'requestpm',
            'msg_id' => $msg_id,
        ];

        return $notification_data;
    }

    public function addSuperevisor($sup_id)
    {
        $last_p_id = "";
        $query = "SELECT * FROM projects ORDER BY id DESC LIMIT 1";
        $result = $this->query($query);

        $last_p_id = $result[0]->id;


        // foreach data
        $errors = 0;
        $msg_id = $last_p_id;



        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => $sup_id,
            'message' => 'You are assigned for the project '.$msg_id,
            'status' => 'Unseen',
            'type' => 'addproject',
            'msg_id' => $msg_id,
        ];

        return $notification_data;
    }

    public function addTask($project_id)
    {
        $last_t_id = "";
        $query = "SELECT * FROM allocated_task ORDER BY id DESC LIMIT 1";
        $result = $this->query($query);

        $query1 = "SELECT * FROM projects WHERE id = :project_id";
        $data['project_id'] = $project_id;
        $result1 = $this->query($query1, $data);
        $sup_id = $result1[0]->supervisor_id;

        $last_t_id = $result[0]->task_id;


        // foreach data
        $msg_id = $last_t_id;



        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => $sup_id,
            'message' => 'Task'.$msg_id.' add for the project '.$project_id,
            'status' => 'Unseen',
            'type' => 'addtask',
            'msg_id' => $msg_id,
        ];

        return $notification_data;
    }

    public function startProject($project_id)
    {




        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => 1,
            'message' => 'Project '.$project_id.' is started',
            'status' => 'Unseen',
            'type' => 'startproject',
            'msg_id' => $project_id,
        ];

        return $notification_data;
    }

    public function complainttocoo($complaint_id)
    {




        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => 1,
            'message' => 'Consider complaint '.$complaint_id,
            'status' => 'Unseen',
            'type' => 'addtask',
            'msg_id' => $complaint_id,
        ];

        return $notification_data;
    }

    public function warningTask($id)
    {
        $query = "SELECT * FROM allocated_task WHERE id = :id";
        $data['id'] = $id;
        $result = $this->query($query, $data);
        $project_id = $result[0]->project_id;

        $query1 = "SELECT * FROM projects WHERE id = :project_id";
        $data1['project_id'] = $project_id;
        $result1 = $this->query($query1, $data1);
        $sup_id = $result1[0]->supervisor_id;



        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => $sup_id,
            'message' => 'Allocate task ID '.$id .' time period is expired',
            'type' => 'addtask',
            'msg_id' => $id,
        ];

        return $notification_data;
    }



    //get customerid for complaints in order to notify after handling
    public function getCUstomerIDforNotifyHandledComplaints($value){
        

        $query="SELECT user_id FROM complaint
        INNER JOIN projects ON projects.id=complaint.project_id

        WHERE complaint.id = :value "; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function completeProjectnotify($project_id)
    {




        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => 1,
            'message' => 'The Project, by '.$project_id.' has been completed',
            'status' => 'Unseen',
            'type' => 'startproject',
            'msg_id' => $project_id,
        ];

        return $notification_data;
    }
}
?>
