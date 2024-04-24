<?php 
class Project_requests extends Model{

    protected $table="project_requests";

    protected $afterSelect = [
        'get_user',
        'get_user_m',
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
        'get_manager',
    ];

    public function validate($DATA){

        $this->errors = array();



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
    // public function company($value){


    //     $query="SELECT * FROM project_requests 
    //     INNER JOIN land ON project_requests.land_id = land.id 
        
    //     WHERE project_requests.user_id = :value AND project_requests.land_type='company' "; 

    //     //return $this->query($query);
    //     return $this->query($query, [
    //         'value' => $value,
    //     ]);
    // }

    //user's lands from user_lands
    public function customer($value){


        $query="SELECT * FROM user_lands 
        
        WHERE user_lands.modification_id = :value  "; 

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

        $query="SELECT staff.id, staff.district, staff.firstname, staff.lastname, staff.project_count, 
        COALESCE((SELECT COUNT(*) FROM projects WHERE projects.status = 'Ongoing' AND projects.manager_id = staff.id), 0) 
            AS current_working_projects_count, 
        COALESCE((SELECT COUNT(*) FROM projects WHERE projects.status = 'Completed' AND projects.manager_id = staff.id AND projects.date >= DATE_SUB(CURDATE(), INTERVAL 2 MONTH)), 0) 
            AS worked_project_count 
        FROM staff WHERE staff.district = :value
        AND staff.role = 'Project Manager' ORDER BY staff.project_count ASC;";

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

    public function get_user_m($data){
    
        $staff = new Staffs();
        

        foreach ($data as $key => $row){
            if(property_exists($row,"manager_id")){
                $result = $staff->where('id',$row->manager_id);
                $data[$key]->staff_m = is_array($result) ? $result[0] : false ;
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
            if(property_exists($row,"tile_id")){
                $result = $tile->where('file_name',$row->tile_id);
                $data[$key]->tile_id = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
    public function get_bathroom_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"tile_id")){
                $result = $tile->where('id',$row->tile_id);
                $data[$key]->tile_id = is_array($result) ? $result[0] : false ;
        
            }
       }

    
        return $data;
    
    }
    
    public function get_dining_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"tile_id")){
                $result = $tile->where('id',$row->tile_id);
                $data[$key]->tile_id = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }

    public function get_default_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"tile_id")){
                $result = $tile->where('id',$row->tile);
                $data[$key]->tile_id = is_array($result) ? $result[0] : false ;
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


    //to get manager's name
    public function get_manager($data){
    
        $staff = new Staffs();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"manager_id")){
                $result = $staff->where('id',$row->manager_id);
                $data[$key]->managerName = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }

    public function LatestReq($p_id = null){

        $query="SELECT * FROM project_requests WHERE manager_id = :p_id AND status = 'Modified' ORDER BY project_requests.date DESC";
        $data['p_id'] = $p_id;
        return $this->query($query,$data);
    }
   
    //get rejected requests
    public function findAllRejectedRequests(){


        $query="SELECT project_requests.*,rejected_project_requests.reason FROM project_requests  
        INNER JOIN rejected_project_requests ON
        project_requests.id = rejected_project_requests.project_request_id
        
        WHERE project_requests.status = 'Rejected' "; 

        //return $this->query($query);
        return $this->query($query);
    }

    // findAllRequests that are not Rejected or Done
    public function findAllRequests(){


        $query="SELECT * FROM project_requests  
       
        WHERE project_requests.status = 'Modified' OR  project_requests.status = 'Unodified'"; 

        //return $this->query($query);
        return $this->query($query);
    }
    
    // findAllRequests in a given year for the analysis: rejected or not all states included
    public function findAllRequestsInYear($value){


        $query="SELECT * FROM project_requests   
        WHERE YEAR(date) = :value "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function findAllRequestsCountInYear($value){


        $query="SELECT COUNT(*) AS total FROM project_requests   
        WHERE YEAR(date) = :value "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function findAllRejectedRequestsCountInYear($value){


        $query="SELECT COUNT(*) AS total FROM project_requests   
        WHERE YEAR(date) = :value AND status='Rejected'"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }


    //get most selected model details
    public function getMostSelectedModelID($value){

        $query="SELECT model_id, COUNT(*) AS request_count
        FROM project_requests
        WHERE YEAR(date) = :value
        GROUP BY model_id
        ORDER BY request_count DESC
        LIMIT 1";



        return $this->query($query, [
            'value' => $value,
        ]);
    }



    //to get salary , land photograph and block plan 
    public function getSalary($value){


        $query="SELECT file_name FROM attachment
       
        WHERE reference_id = :value AND  attachment_type = 'SALARY'"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function getLandPhoto($value){


        $query="SELECT file_name FROM attachment
       
        WHERE reference_id = :value AND  attachment_type = 'LANDPHOTO'"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function getBlockPlan($value){


        $query="SELECT file_name FROM attachment
       
        WHERE reference_id = :value AND  attachment_type = 'LANDBLOCK'"; 

        return $this->query($query, [
            'value' => $value,
        ]); 
    }
    
    public function getRejectReason($value){


        $query="SELECT reason FROM rejected_project_requests      
        WHERE project_request_id = :value "; 

        return $this->query($query, [
            'value' => $value,
        ]); 
    }
}