<?php 
class View_Managers extends Model{

    public function seeAllManagers(){


        $query="SELECT * FROM members_projects 
        INNER JOIN staff ON members_projects.staff_id = staff.id 
        WHERE staff.role='Project Manager' ";
        
        return $this->query($query);
    
    }

    public function seeAllProjects($value){


        $query="SELECT * FROM members_projects 
        INNER JOIN project_requests ON members_projects.staff_id = project_requests.manager_id 
        INNER JOIN user ON project_requests.user_id = user.id 
        WHERE members_projects.staff_id = :value";
        
        return $this->query($query, [
            'value' => $value,
        ]);
    
    }


    


   
}
?>