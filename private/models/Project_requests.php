<?php 
class Project_requests extends Model{

    protected $table="project_requests";
    protected $table6="land";
    protected $table7="user_land";
    protected $table8="user";
    protected $table9="staff";
    protected $table10="user_data";


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
    //SELECT *
}
?>