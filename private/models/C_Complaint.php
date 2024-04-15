<?php 
class C_Complaint extends Model{
    protected $table = "complaint";

    public function viewComplanitDetail($id){

        $query = "select * from complaint where id = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
    }

    public function updateRemark($id,$remark){

        $query = "update complaint set remark=:remark where id=:complaint_id";
		$param=[
            'complaint_id'=>$id,
            'remark'=>$remark,
        ];
        return $this->query($query,$param);
    }
    


    //gaveesha

    //this is to get unhandled complaints on photograph Quality 
    public function getPendingPhotographComplaints(){

        $query="SELECT * FROM (
                    SELECT *
                    FROM complaint   
                    WHERE complaint.type='Quality of the photograph' AND complaint.status IN ('Pending','Notified')
                    ORDER BY
                        CASE 
                            WHEN status='Pending' THEN 1
                            WHEN status='Notified' THEN 2
                            ELSE 3
                        END,
                    STR_TO_DATE(date, '%Y-%m-%d') -- Convert string date to MySQL date format
                ) AS grouped_complaints
                    ORDER BY
                        CASE 
                            WHEN status='Pending' THEN 1
                            WHEN status='Notified' THEN 2
                            ELSE 3
                        END,
                    STR_TO_DATE(date, '%Y-%m-%d'); -- Convert string date to MySQL date format
            
        "; 
        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingBeingDelayedComplaints(){ 

        $query="SELECT * FROM (
            SELECT *
            FROM complaint   
            WHERE complaint.type='Construction project delay ' AND complaint.status IN ('Pending','Notified')
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d') -- Convert string date to MySQL date format
        ) AS grouped_complaints
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d'); -- Convert string date to MySQL date format
        "; 
        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingWorkmanshipAndMaterialsComplaints(){

        $query="SELECT * FROM (
            SELECT *
            FROM complaint   
            WHERE complaint.type='Quality of workmanship and materials' AND complaint.status IN ('Pending','Notified')
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d') -- Convert string date to MySQL date format
        ) AS grouped_complaints
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d'); -- Convert string date to MySQL date format
        "; 

        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingPoorCommunicationComplaints(){

        $query="SELECT * FROM (
            SELECT *
            FROM complaint   
            WHERE complaint.type='Poor Communication' AND complaint.status IN ('Pending','Notified')
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d') -- Convert string date to MySQL date format
        ) AS grouped_complaints
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d'); -- Convert string date to MySQL date format
        "; 

        //return $this->query($query);
        return $this->query($query);
    }

    public function getPendingOtherComplaints(){

        $query="SELECT * FROM (
            SELECT *
            FROM complaint   
            WHERE complaint.type='other ' AND complaint.status IN ('Pending','Notified')
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d') -- Convert string date to MySQL date format
        ) AS grouped_complaints
            ORDER BY
                CASE 
                    WHEN status='Pending' THEN 1
                    WHEN status='Notified' THEN 2
                    ELSE 3
                END,
            STR_TO_DATE(date, '%Y-%m-%d'); -- Convert string date to MySQL date format
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

    //get all complaint counts
    public function getComplaintCount($type){


        $query="SELECT COUNT(*) AS total FROM complaint 
        WHERE type = :type "; 
       
        return $this->query($query, [
            'type' => $type,
        ]);
    }




    //from this point down are handled complaints 
    
    
    //on photograph Quality 
    public function getPastPhotographComplaints(){

        $query="SELECT * FROM complaint WHERE complaint.type='Quality of the photograph' AND complaint.status = 'Handled'
                
                ORDER BY
                    STR_TO_DATE(date, '%Y-%m-%d')DESC; -- Convert string date to MySQL date format
            
        "; 
        //return $this->query($query);
        return $this->query($query);
    }

    public function getPastBeingDelayedComplaints(){ 

        $query="SELECT * FROM complaint WHERE complaint.type='Construction project delay ' AND complaint.status = 'Handled'
                
                ORDER BY
                    STR_TO_DATE(date, '%Y-%m-%d')DESC;   
            
        "; 
        //return $this->query($query);
        return $this->query($query);
    }

    public function getPastWorkmanshipAndMaterialsComplaints(){

        $query="SELECT * FROM complaint WHERE complaint.type='Quality of workmanship and materials' AND complaint.status = 'Handled'
                
                ORDER BY
                    STR_TO_DATE(date, '%Y-%m-%d')DESC;  
            
        "; 

        //return $this->query($query);
        return $this->query($query);
    }

    public function getPastPoorCommunicationComplaints(){

        $query="SELECT * FROM complaint WHERE complaint.type='Poor Communication' AND complaint.status = 'Handled'
                
                ORDER BY
                    STR_TO_DATE(date, '%Y-%m-%d')DESC; 
            
        "; 

        //return $this->query($query);
        return $this->query($query);
    }

    public function getPastOtherComplaints(){

        $query="SELECT * FROM complaint WHERE complaint.type='other ' AND complaint.status = 'Handled'
                
                ORDER BY
                    STR_TO_DATE(date, '%Y-%m-%d')DESC; 
            
        "; 

        //return $this->query($query);
        return $this->query($query);
    }

    
    
    
    





}


?>

