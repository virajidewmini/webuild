<?php 
class Models extends Model{
    protected $table = "model";

    protected $afterSelect = [
        'get_kitchen_tile',
        'get_bathroom_tile',
        'get_dining_tile',
        'get_default_tile',
        'get_default_color',
        
    ];

    public function modeldetails($value){


        $query="SELECT model.* FROM project_requests 
        INNER JOIN model ON project_requests.model_id = model.id 
        
        WHERE project_requests.id = :value"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }
    public function get_kitchen_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"kitchen_tile")){
                $result = $tile->where('file_name',$row->kitchen_tile);
                $data[$key]->kitchenTile = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }

    
    
    public function get_bathroom_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"bathroom_tile")){
                $result = $tile->where('file_name',$row->bathroom_tile);
                $data[$key]->bathroomTile = is_array($result) ? $result[0] : false ;
        
            }
       }

    
        return $data;
    
    }
    
    public function get_dining_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"dining_tile")){
                $result = $tile->where('file_name',$row->dining_tile);
                $data[$key]->diningTile = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }

    public function get_default_tile($data){
    
        $tile = new Tiles();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"tile")){
                $result = $tile->where('file_name',$row->tile);
                $data[$key]->defaultTile = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
   
    public function get_default_color($data){
    
        $paint = new Paint();
        
        foreach ($data as $key => $row){
            if(property_exists($row,"color")){
                $result = $paint->where('id',$row->color);
                $data[$key]->defaultColor = is_array($result) ? $result[0] : false ;
            }
            
       }

    
        return $data;
    
    }
   

    
    

    
}
?>