<?php 
class Kitchen extends Model{
    protected $table = "kitchen_modification";
    protected $afterSelect = [
        'get_paint',
        'get_tile',
    ];


    public function get_paint($data){
    
        $paint = new Paint();
        foreach ($data as $key => $row2){
            
            $result = $paint->where('id',$row2->paint_id);
            $data[$key]->paint = is_array($result) ? $result[0] : false ;
    
        }
    
        return $data;
    
    }

    public function get_tile($data){
    
        $tile = new Tiles();
        foreach ($data as $key => $row2){
            
            $result = $tile->where('id',$row2->tile_id);
            $data[$key]->tile = is_array($result) ? $result[0] : false ;
    
        }
    
        return $data;
    
    }
    
}
?>