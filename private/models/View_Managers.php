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

    protected $afterSelect = [
        'get_model',
        'get_manager',
    ];
    public function get_model($data){
    
        $model = new House_Models();
        

        foreach ($data as $key => $row){
            if(property_exists($row,"user_id")){
                $result = $model->where('id',$row->model_id);
                $data[$key]->model = is_array($result) ? $result[0] : false ;
            }
        }
    
        return $data;
    
    }

    public function get_manager($data){
    
        $manager = new Staffs();
        

        foreach ($data as $key => $row){
            if(property_exists($row,"manager_id")){
                $result = $manager->where('id',$row->manager_id);
                $data[$key]->manager = is_array($result) ? $result[0] : false ;
            }
        }
    
        return $data;
    
    }


    


   
}
?>