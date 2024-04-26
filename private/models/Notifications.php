
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

    public function projectQuatationNotify()
    {
        $last_q_id = "";
        $query = "SELECT * FROM quotation ORDER BY id DESC LIMIT 1";
        $result = $this->query($query);

        $last_p_id = $result[0]->id;
        $data["quatation_id"] = $last_p_id;


        // foreach data
        $errors = 0;
        $msg_id = $last_p_id;



        $notification_data = [
            'date' => date('Y-m-d'),
            'staff_id' => 1,
            'message' => 'Your project quotation has been submitted successfully',
            'status' => 'Unseen',
            'type' => 'quotation_pm_to_co',
            'msg_id' => $msg_id,
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
}
?>