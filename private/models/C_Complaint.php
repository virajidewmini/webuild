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



    //for Admin dashboard
    public function getComplaintsInMonth($month,$type){


        $query="SELECT COUNT(*) AS total FROM complaint 
        WHERE type = :type AND 
            CASE 
                WHEN :month = 'January'  THEN date LIKE '____-01-__'
                WHEN :month = 'February' THEN date LIKE '____-02-__'
                WHEN :month = 'March' THEN date LIKE '____-03-__'
                WHEN :month = 'April' THEN date LIKE '____-04-__'
                WHEN :month = 'May' THEN date LIKE '____-05-__'
                WHEN :month = 'June' THEN date LIKE '____-06-__'
                WHEN :month = 'July'  THEN date LIKE '____-07-__'
                WHEN :month = 'February' THEN date LIKE '____-08-__'
                WHEN :month = 'February' THEN date LIKE '____-09-__'
                WHEN :month = 'February' THEN date LIKE '____-10-__'
                WHEN :month = 'February' THEN date LIKE '____-11-__'
                WHEN :month = 'February' THEN date LIKE '____-12-__'
                ELSE FALSE
            END 
        "; 
        //$data['id'] = $id;
        // return $this->query($query,$data);
        // //return $this->query($query);
        return $this->query($query, [
            'month'=> $month,
            'type' => $type,
        ]);
    }

    
    
    
    





}


?>

