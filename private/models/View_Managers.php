<?php 
class Project_requests extends Model{

    public function seeAllManagers(){


        $query="SELECT * FROM members_projects 
        INNER JOIN staff ON members_projects.staff_id = staff.id 
        WHERE staff.role='Project Manager' "
        
        return $this->query($query);
    
    }


    


   
}
?>