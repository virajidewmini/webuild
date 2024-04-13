<?php 
class View_Managers extends Model{

    public function seeAllManagers(){


        $query="SELECT * FROM staff 
        
        WHERE staff.role='Project Manager' ";
        
        return $this->query($query);
    
    }

    public function seeAllProjects($value){


        $query="SELECT * FROM projects 
        INNER JOIN user ON projects.user_id = user.id WHERE projects.manager_id = :value;";
        
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