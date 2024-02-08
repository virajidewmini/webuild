
<?php 
class Material_requests extends Model{
    protected $table = "material_requests_to_coordinator";


    protected $afterSelect = [
        'get_material',
        
    ];

    public function get_material($data){
    
        $material = new Materials();
        

        foreach ($data as $key => $row){
            if(property_exists($row,"material_code")){
                $result = $material->where('code',$row->material_code);
                $data[$key]->material = is_array($result) ? $result[0] : false ;
            }

        }

        return $data;
    }
    
    public function getStaffID($value,$type){



        $query="SELECT * FROM projects        
        WHERE projects.id = :value"; 
    

        
        return $this->query($query, [
            'value' => $value,
        ]);
    }



    
    
    


}
?>