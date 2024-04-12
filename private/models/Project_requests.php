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
        'get_land',
        'get_land_u',
        'get_model_price',
        'get_payment',
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
        
        WHERE project_requests.user_id = :value AND project_requests.land_type='company' "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    //user's lands from user_lands
    public function customer($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN user_lands ON project_requests.land_id = user_lands.id 
        
        WHERE project_requests.user_id = :value AND project_requests.land_type='customer' "; 

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
                $result = $tile->where('id',$row->tile);
                $data[$key]->tile = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
    public function get_default_color($data){
    
        $tile = new Paint();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"color")){
                $result = $tile->where('id',$row->color);
                $data[$key]->color = is_array($result) ? $result[0] : false ;
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

    public function get_land($data){
    
        $land = new Land();
        foreach ($data as $key => $row1){
            if(isset($row1->land_id)){
                $result = $land->where('id',$row1->land_id);
                $data[$key]->land = is_array($result) ? $result[0] : false ;
            }
    
        }
    
        return $data;
    }
    public function get_land_u($data){
    
        $land_u = new User_land();
        foreach ($data as $key => $row1){
            if(isset($row1->land_id)){
                $result = $land_u->where('id',$row1->land_id);
                $data[$key]->land_u = is_array($result) ? $result[0] : false ;
            }
    
        }
    
        return $data;
    }

    public function get_model_price($data){
    
        $model = new Models();
        foreach ($data as $key => $row1){
            if(isset($row1->model_id)){
                $result = $model->where('id',$row1->model_id);
                $data[$key]->mdl = is_array($result) ? $result[0] : false ;
            }
    
        }
    
        return $data;
    }

    public function get_payment($data){
    
        $payment = new Payment_packages();
        foreach ($data as $key => $row1){
            if(isset($row1->payment_plan_id)){
                $result = $payment->where('id',$row1->payment_plan_id);
                $data[$key]->payment = is_array($result) ? $result[0] : false ;
            }
    
        }
    
        return $data;
    }

    //for admindashboard
    
    public function getrequestsInMonth($month){

        $query="SELECT COUNT(*) AS total FROM project_requests 
        WHERE  
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
        
        return $this->query($query, [
            'month'=> $month,
        ]);
    
    }
    
    
    
    
    
    //delete once done

    public function getProjectsInMonth($status,$period){
    
        $query="SELECT COUNT(*) AS total FROM projects 
            WHERE status = :status AND 
                CASE 
                    WHEN :period = 'first'  THEN date LIKE '____-01-__' OR date LIKE '____-02-__' OR date LIKE '____-03-__'
                    WHEN :period = 'second' THEN date LIKE '____-04-__' OR date LIKE '____-05-__' OR date LIKE '____-06-__'
                    WHEN :period = 'third' THEN date LIKE '____-07-__' OR date LIKE '____-08-__' OR date LIKE '____-09-__'
                    WHEN :period = 'fourth' THEN date LIKE '____-10-__' OR date LIKE '____-12-__' OR date LIKE '____-11-__'
                    
                    ELSE FALSE
                END 
            "; 
            
            return $this->query($query, [
                'status'=> $status,
                'period' => $period,
            ]);
        }
    
    //for coordinator dashboard

    
    public function getProjectRequestCount(){

        $query="SELECT COUNT(*) AS total
        FROM project_requests
        WHERE project_requests.date >= DATE_SUB(CURDATE(), INTERVAL 2 MONTH)
         ";

        return $this->query($query);
    }
    
    
}