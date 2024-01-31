
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
    
    
    public function setState($value){

        $query="UPDATE complaint set complaint.status='Notified'       
        WHERE complaint.id = :value"; 
        
        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }


}
?>