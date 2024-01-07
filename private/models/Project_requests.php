<?php 
class Project_requests extends Model{

    protected $table="project_requests";

    public function requests($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN user ON project_requests.user_id = user.id 
        INNER JOIN user_data ON project_requests.user_id = user_data.user_id 
        
        WHERE project_requests.id = :value"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }


    public function company($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN land ON project_requests.land_id = land.id 
        
        WHERE project_requests.user_id = :value AND project_requests.status_of_land='company' "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }


    public function customer($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN user_lands ON project_requests.land_id = user_lands.id 
        
        WHERE project_requests.user_id = :value AND project_requests.status_of_land='customer' "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function find_managers_in_district($value){

        $query="SELECT * FROM staff 
        INNER JOIN members_projects ON staff.id=members_projects.staff_id
        WHERE staff.district = :value AND staff.role='Project Manager' "; 

        return $this->query($query, [
            'value' => $value,
        ]);
    }


    public function validate($DATA){

        $this->errors = array();

        /**
        firstname validation
        **/

        //empty
        if(empty($DATA['firstname'])) {
            $this->errors['firstname']="Name can't be empty";
        }

        //only letters
        if(!empty($DATA['firstname']) && !preg_match('/^[a-zA-Z\s]+$/',$DATA['firstname'])) {
            $this->errors['firstfirstname']="Only letters allowed";
        }

         

        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }


    
}
?>
