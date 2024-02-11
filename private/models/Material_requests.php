
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
    
    public function getSupplierDetails($value){



        $query="SELECT * FROM suppliers        
        WHERE suppliers.material = :value"; 
        
        return $this->query($query, [
            'value' => $value,
        ]);
    }


    public function findAll(){

        $query="SELECT * FROM material_requests_to_coordinator  
        ORDER BY
            CASE 
                WHEN status='Pending' THEN 1
                WHEN status='Emailed' THEN 2
                WHEN status='Recieved' THEN 3
                ELSE 4
            END
        "; 
        //return $this->query($query);
        return $this->query($query);
    }
    
    


}
?>