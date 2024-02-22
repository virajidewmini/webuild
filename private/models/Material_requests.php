
<?php 
class Material_requests extends Model{
    protected $table = "material_requests_to_coordinator";
    protected $table1 = "material_requests";


    protected $afterSelect = [
        'get_material',
        
    ];

    protected $allowedColumns = [
        'p_id',
        'r_id',
        'material_or_item_id',
        'material_or_item_name',
        'mesure_unit',
        'quantity',
    ];

    public function get_material($data){
    
        $material = new Materials();
        

        foreach ($data as $key => $row){
            if(property_exists($row,"material_code")){
                $result = $material->where('material_code',$row->material_code);
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

    public function validate($data)
    {
        $this->table1;


        // $p_id =$data["project_id"];

        // unset($data["number"]);
        // $data["p_id"] = $last_p_id;
        // $data["r_id"] = $last_r_id;

        // print_r($result);
        // echo $last_p_id, $last_r_id;

        $keys = array_keys($data);
        // $columns = implode(',', $keys);
        $columns = "material_or_item_id, material_or_item_name, mesure_unit, quantity, project_id, level";

        // foreach data
        $errors = 0;
        $count_data = count($data["m_id"]);
        for ($i = 0; $i < $count_data; $i++) {
            $material_or_item_id = $data["m_id"][$i];
            $material_or_item_name = $data["m_name"][$i];
            $mesure_unit = $data["m_unit"][$i];
            $quantity = $data["m_quantity"][$i];
            $project_id = $data["project_id"];
            $level = $data["level"];

            $db_data = [
                "material_or_item_id" => $material_or_item_id,
                "material_or_item_name" => $material_or_item_name,
                "mesure_unit" => $mesure_unit,
                "quantity" => $quantity,
                "project_id" => $project_id,
                "level" => $level,
            ];

            $query = "insert into $this->table1 ($columns) values (:material_or_item_id,:material_or_item_name,:mesure_unit,:quantity,:project_id,:level)";
            // echo $query;
            $result = $this->query($query, $db_data);
            if (!$result) {
                $errors++;
            }
        }

        if ($errors == 0)
            return true;

        return false;
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