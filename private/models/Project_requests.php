<?php 
class Project_requests extends Model{

    protected $table="project_requests";

    protected $afterSelect = [
        'get_user',
        'get_modeln',
        'get_kitchen_tile',
        'get_bathroom_tile',
        'get_dining_tile',
        'get_default_tile',
        'get_default_color',
        'get_kitchen_color',
        'get_bathroom_color',
        'get_dining_color',
    ];

    public function validate($DATA){

        $this->errors = array();


        /**
        
        **/


        if(empty($DATA['new_price'])){
            $this->errors['new_price']="New price can't be empty ";
        }
        if (!empty($DATA['new_price']) && !preg_match('/^[0-9]+$/', $DATA['new_price'])) {
            $this->errors['new_price'] = "Invalid Price";
        }
        


      


        if(count($this->errors) == 0){
            return true;
        }
        return false;



    }


    //this is actually user data from the two tables
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

    //to get land details
    //company lands from land table
    public function company($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN land ON project_requests.land_id = land.id 
        
        WHERE project_requests.user_id = :value AND project_requests.status_of_land='company' "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    //user's lands from user_lands
    public function customer($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN user_lands ON project_requests.land_id = user_lands.id 
        
        WHERE project_requests.user_id = :value AND project_requests.status_of_land='customer' "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    //to get manager details
    public function managerdetails($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN staff ON project_requests.manager_id = staff.id 
        
        WHERE project_requests.id = :value"; 

        //return $this->query($query);
        
        return $this->query($query, [
            'value' => $value,
        ]);
    }
    public function modeldetails($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN model ON project_requests.model_id = model.id 
        
        WHERE project_requests.id = :value"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

     //to get modification details
     public function modificationdetails($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN modifications ON project_requests.modification_id = modifications.id 
        
        WHERE project_requests.id = :value"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }


    public function find_managers_in_district($value){

        $query="SELECT staff.id , staff.district , staff.firstname, staff.lastname , members_projects.count from staff
        LEFT JOIN members_projects ON staff.id=members_projects.staff_id
        WHERE staff.district = :value AND staff.role='Project Manager'
        ORDER BY members_projects.count ASC";

        return $this->query($query, [
            'value' => $value,
        ]);
    }




    

    public function get_user($data){
    
        $user = new Users();
        

        foreach ($data as $key => $row){
            if(property_exists($row,"user_id")){
                $result = $user->where('id',$row->user_id);
                $data[$key]->user = is_array($result) ? $result[0] : false ;
            }

        }

        return $data;
    }

    public function get_modeln($data){
    
        $model = new Models();
        

        foreach ($data as $key => $row){
            if(property_exists($row,"model_id")){
                $result = $model->where('id',$row->model_id);
                $data[$key]->model = is_array($result) ? $result[0] : false ;
            }

        }

        return $data;
    }

    //SELECT *
    public function get_model($data){
    
        $model = new Models();
        foreach ($data as $key => $row1){
            
            $result = $model->where('id',$row1->model_id);
            $data[$key]->model = is_array($result) ? $result[0] : false ;

        }

        return $data;
    }

    
    public function get_kitchen_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"kitchen_tile")){
                $result = $tile->where('id',$row->kitchen_tile);
                $data[$key]->kitchen_tile = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
    public function get_bathroom_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"bathroom_tile")){
                $result = $tile->where('id',$row->bathroom_tile);
                $data[$key]->bathroom_tile = is_array($result) ? $result[0] : false ;
        
            }
       }

    
        return $data;
    
    }
    
    public function get_dining_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"dining_tile")){
                $result = $tile->where('id',$row->dining_tile);
                $data[$key]->dining_tile = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }

    public function get_default_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"dining_tile")){
                $result = $tile->where('id',$row->default_tile);
                $data[$key]->default_tile = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
    public function get_default_color($data){
    
        $tile = new Paint();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"default_color")){
                $result = $tile->where('id',$row->default_color);
                $data[$key]->default_color = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }

    
    public function get_kitchen_color($data){
    
        $color = new Paint();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"kitchen_color")){
                $result = $color->where('id',$row->kitchen_color);
                $data[$key]->kitchen_color = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
    public function get_bathroom_color($data){
    
        $color = new Paint();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"bathroom_color")){
                $result = $color->where('id',$row->bathroom_color);
                $data[$key]->bathroom_color = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
    
    public function get_dining_color($data){
    
        $color = new Paint();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"dining_color")){
                $result = $color->where('id',$row->dining_color);
                $data[$key]->dining_color = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}