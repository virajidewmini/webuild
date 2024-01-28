<?php 
class C_Complaint extends Model{
    protected $table = "complaint";

    public function viewComplanitDetail($id){

        $query = "select * from complaint where id = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
    }
    


    //gaveesha

    //this is to get unhandled complaints on photograph Quality 
    public function getPendingPhotographComplaints(){

        $query="SELECT * FROM complaint   
        WHERE complaint.type='Quality of photograph' AND complaint.status IN ('Pending','Notified') 
        ORDER BY
            CASE 
                WHEN status='Pending' THEN 1
                WHEN status='Notified' THEN 2
                ELSE 3
            END
        "; 
        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingBeingDelayedComplaints(){

        $query="SELECT * FROM complaint   
        WHERE complaint.type='Construction project delay ' AND complaint.status IN ('Pending','Notified') 
        ORDER BY
            CASE 
                WHEN status='Pending' THEN 1
                WHEN status='Notified' THEN 2
                ELSE 3
            END
        "; 
        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingWorkmanshipAndMaterialsComplaints(){

        $query="SELECT * FROM complaint   
        WHERE complaint.type='Quality of workmanship and materials' AND complaint.status IN ('Pending','Notified') 
        ORDER BY
            CASE 
                WHEN status='Pending' THEN 1
                WHEN status='Notified' THEN 2
                ELSE 3
            END
        "; 

        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingPoorCommunicationComplaints(){

        $query="SELECT * FROM complaint   
        WHERE complaint.type='Poor Communication' AND complaint.status IN ('Pending','Notified') 
        ORDER BY
            CASE 
                WHEN status='Pending' THEN 1
                WHEN status='Notified' THEN 2
                ELSE 3
            END
        "; 

        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingOtherComplaints(){

        $query="SELECT * FROM complaint   
        WHERE complaint.type='other ' AND complaint.status IN ('Pending','Notified') 
        ORDER BY
            CASE 
                WHEN status='Pending' THEN 1
                WHEN status='Notified' THEN 2
                ELSE 3
            END
        "; 

        //return $this->query($query);
        return $this->query($query);
    }
    
    
    
    





}


?>

