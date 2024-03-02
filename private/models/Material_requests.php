
<?php 
class Material_requests extends Model{
    protected $table = "material_requests_to_coordinator";
    protected $table1 = "material_requests";
    protected $table2 = "project_material_request";

    


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

    public function validate($DATA){
        $this->errors = array();

        if (empty($DATA['project_id'])) {
            $this->errors['project_id'] = "Project ID can't be empty";
        }



        if(count($this->errors) == 0){
            return true;
        }
    
        return false;
    }

    public function inserMaterial($data)
    {
        $this->table1;

        $query = "SELECT * FROM $this->table2 ORDER BY id DESC LIMIT 1";
        $result = $this->query($query);

        $new_request_id = $result[0]->id;

        $keys = array_keys($data);
        // $columns = implode(',', $keys);
        $columns = "material_or_item_id, material_or_item_name, mesure_unit, quantity, project_id, level, request_id";

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
            $request_id = $new_request_id;


            $db_data = [
                "material_or_item_id" => $material_or_item_id,
                "material_or_item_name" => $material_or_item_name,
                "mesure_unit" => $mesure_unit,
                "quantity" => $quantity,
                "project_id" => $project_id,
                "level" => $level,
                "request_id" => $request_id,
            ];

            $query = "insert into $this->table1 ($columns) values (:material_or_item_id,:material_or_item_name,:mesure_unit,:quantity,:project_id,:level,:request_id)";
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

    public function update_p_m_request($data,$pmid)
    {
        $this->table2;


        // $p_id =$data["project_id"];

        // unset($data["number"]);
        // $data["p_id"] = $last_p_id;
        // $data["r_id"] = $last_r_id;

        // print_r($result);
        // echo $last_p_id, $last_r_id;

        $keys = array_keys($data);
        // $columns = implode(',', $keys);
        $columns = "project_id, manager_id, date";

        // foreach data
        $errors = 0;
            $project_id = $data["project_id"];
            $manager_id = $pmid;
            $date = date("Y-m-d");


            $db_data = [
                "project_id" => $project_id,
                "manager_id" => $manager_id,
                "date" => $date,
            ];

            $query = "insert into $this->table2 ($columns) values (:project_id,:manager_id,:date)";
            // echo $query;
            $result = $this->query($query, $db_data);
            if (!$result) {
                $errors++;
            }

        if ($errors == 0)
            return true;

        return false;
    }


}
?>