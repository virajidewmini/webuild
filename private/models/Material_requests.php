
<?php
class Material_requests extends Model
{
    protected $table = "material_requests_to_coordinator";
    protected $table1 = "material_requests";




    protected $afterSelect = [
        'get_material',

    ];


    public function get_material($data)
    {

        $material = new Materials();


        foreach ($data as $key => $row) {
            if (property_exists($row, "material_code")) {
                $result = $material->where('material_code', $row->material_code);
                $data[$key]->material = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

    public function getSupplierDetails($value)
    {



        $query = "SELECT * FROM suppliers        
        WHERE material = :value";

        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function validate($DATA)
    {
        $this->errors = array();

        // if (empty($DATA['project_id'])) {
        //     $this->errors['project_id'] = "Project ID can't be empty";
        // }
        // //empty
        // if(empty($DATA['m_quantity[]'])){
        //     $this->errors['quantity[]']="Quantity can't be empty ";
        // }

        // //valid contactnumber
        // if(!empty($DATA['m_quantity[]']) && !preg_match('/\d{3}$/',$DATA['m_quantity[]'])) {
        //     $this->errors['contactnumber']="Invalid contactnumber Number; Enter only the 10 digits";
        // }



        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function insertMaterial($data)
    {
        $query = "SELECT * FROM material_requests ORDER BY request_id DESC LIMIT 1";
        $result = $this->query($query);
        if ($result) {
            $old_request_id = $result[0]->request_id;
            $new_request_id = ++$old_request_id;
        } else {
            $new_request_id = 1;
        }

        $columns = "material_or_item_id, material_or_item_name, mesure_unit, quantity, project_id, level, request_id, date, status, send_district";

        $errors = 0;
        $count_data = count($data["m_id"]);
        for ($i = 0; $i < $count_data; $i++) {
            $material_or_item_id = $data["m_id"][$i];
            $material_or_item_name = $data["m_name"][$i];
            $measure_unit = $data["m_unit"][$i];
            $quantity = $data["m_quantity"][$i];
            $project_id = $data["project_id"];
            $level = $data["level"];
            $request_id = $new_request_id;
            $date = date("Y-m-d");
            $status = "Request";
            $send_district = $data["district"];

            $db_data = [
                "material_or_item_id" => $material_or_item_id,
                "material_or_item_name" => $material_or_item_name,
                "mesure_unit" => $measure_unit,
                "quantity" => $quantity,
                "project_id" => $project_id,
                "level" => $level,
                "request_id" => $request_id,
                "date" => $date,
                "status" => $status,
                "send_district" => $send_district
            ];

            $query = "INSERT INTO material_requests ($columns) VALUES (:material_or_item_id, :material_or_item_name, :mesure_unit, :quantity, :project_id, :level, :request_id, :date, :status, :send_district)";
            $result = $this->query($query, $db_data);
            if (!$result) {
                $errors++;
            }
        }

        return $errors === 0;
    }


    public function remaining_req($p_id)
    {

        $query = "SELECT material_requests.*, material_quatation_detail.quotation_id
        FROM material_requests
        INNER JOIN material_quatation_detail ON material_requests.request_id = material_quatation_detail.request_id
        WHERE material_requests.status = 'Remain' AND material_requests.project_id = :p_id
        GROUP BY material_requests.request_id";


        return $this->query($query, [
            'p_id' => $p_id,
        ]);
    }

    public function remaining_req_details($r_id)
    {

        $query = "SELECT material_requests.*, material_requests.quantity - material_quatation_detail.send_total_quantity AS remain_quantity FROM material_requests INNER JOIN material_quatation_detail ON material_requests.request_id = material_quatation_detail.request_id WHERE material_requests.status = 'Remain' AND material_requests.material_or_item_id = material_quatation_detail.material_or_item_id AND material_requests.request_id = :r_id GROUP BY material_requests.material_or_item_id";


        return $this->query($query, [
            'r_id' => $r_id,
        ]);
    }


    public function statusChange($id)
    {
        $query = "UPDATE `material_requests` SET `status`='Complete' WHERE `request_id` = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }
    public function getAllMaterialRequest($mid)
    {
        $query = "SELECT *, material_requests.date AS r_date FROM projects INNER JOIN material_requests ON projects.id = material_requests.project_id WHERE projects.manager_id = :mid GROUP BY request_id";
        $data['mid'] = $mid;
        return $this->query($query, $data);
    }
    public function getMaterialRequest($p_id)
    {
        $query = "SELECT *, date AS r_date FROM material_requests WHERE project_id = :p_id GROUP BY request_id";
        $data['p_id'] = $p_id;
        return $this->query($query, $data);
    }

    public function getReqDetails($r_id)
    {
        $query = "SELECT * FROM material_requests WHERE request_id = :r_id ";
        $data['r_id'] = $r_id;
        return $this->query($query, $data);
    }

    
}
?>