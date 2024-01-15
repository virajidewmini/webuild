<?php 
class Models extends Model{
    protected $table = "model";

    protected $afterSelect = [
        //'get_kitchen_tile',
        // 'get_bathroom_tile',
        // 'get_dining_tile',
        // 'get_default_tile',
        // 'get_default_color',
        // 'get_kitchen_color',
        // 'get_bathroom_color',
        // 'get_dining_color',
    ];

    
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
?>