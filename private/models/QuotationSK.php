<?php

class QuotationSK extends Model
{
    protected $table = "material_quatation_detail";


    // Other methods...

    public function quatation_validate($data)
    {

        $this->errors = array();

        if ($this->where('request_id', $data["request_id"])) {
            $this->errors['request_id'] = "The request was already had quotaion and already sent materials";
        } else {
            $count_data = count($data["m_id"]);
            for ($i = 0; $i < $count_data; $i++) {
                if ($data["total_quantity"][$i] != 0) {
                    $flag = 1;
                } else {
                    $flag = 0;
                }
            }
            if ($flag == 1) {
            } else {
                $this->errors['total_quantity'] = "The materials are not available in the stock";
            }
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }
    public function getquatation()
    {
        $query = "SELECT DISTINCT request_id,quotation_id,date  FROM material_quatation_detail ";
        return ($this->query($query));
    }


    public function getquatationDetails($request_id)
    {
        $query = "SELECT 	material_or_item_name,mesure_unit,send_quantity1,send_quantity2,send_total_quantity,total_price FROM `material_quatation_detail` WHERE request_id=:request_id";
        $data['request_id'] = $request_id;
        return ($this->query($query, $data));
    }


    public function insertMaterialquatation($data)
    {

        $query = "SELECT * FROM material_quatation_detail ORDER BY quotation_id DESC LIMIT 1";
        $result = $this->query($query);
        if ($result[0]->id) {
            $last_quatation_id = $result[0]->quotation_id;
        } else {
            $last_quatation_id = 0;
        }
        $new_quatation_id = ++$last_quatation_id;

        if ($data['status']) {
            $query1 = "UPDATE `material_requests` SET `status`='Remain' WHERE request_id = :request_id";
            $arr2['request_id'] = $data["request_id"];
            $this->query($query1, $arr2);
        } else {
            $query1 = "UPDATE `material_requests` SET `status`='Complete' WHERE request_id = :request_id";
            $arr2['request_id'] = $data["request_id"];
            $this->query($query1, $arr2);
        }

        $keys = array_keys($data);
        // $columns = implode(',', $keys);
        $columns = "quotation_id, request_id, material_or_item_id, material_or_item_name, mesure_unit, send_quantity1, send_quantity2, send_total_quantity, total_price, district, date, status";

        // foreach data
        $errors = 0;
        $count_data = count($data["m_id"]);
        for ($i = 0; $i < $count_data; $i++) {
            $quotation_id = $new_quatation_id;
            $request_id = $data["request_id"];
            $material_or_item_id = $data["m_id"][$i];
            $material_or_item_name = $data["material_or_item_name"][$i];
            $mesure_unit = $data["mesure_unit"][$i];
            $send_quantity1 = $data["send_quantity1"][$i];
            $send_quantity2 = $data["send_quantity2"][$i];
            $send_total_quantity = $data["total_quantity"][$i];
            $total_price = $data["total_price"][$i];
            $district = $data["district"];
            $status = 'Sent';
            $date = date('Y-m-d');


            $db_data = [
                "quotation_id" => $quotation_id,
                "request_id" => $request_id,
                "material_or_item_id" => $material_or_item_id,
                "material_or_item_name" => $material_or_item_name,
                "mesure_unit" => $mesure_unit,
                "send_quantity1" => $send_quantity1,
                "send_quantity2" => $send_quantity2,
                "total_price" => $total_price,
                "send_total_quantity" => $send_total_quantity,
                "district" => $district,
                "date" => $date,
                "status" => $status,
            ];

            $query = "insert into material_quatation_detail ($columns) values (:quotation_id, :request_id, :material_or_item_id, :material_or_item_name, :mesure_unit, :send_quantity1, :send_quantity2, :send_total_quantity, :total_price, :district, :date, :status)";
            echo $query;
            $result = $this->query($query, $db_data);

            if (!$result) {
                $errors++;
            }
        }

        if ($errors == 0)
            return true;

        return $quotation_id;
    }

    public function getM_deatails($quotation_id)
    {
        $query = "SELECT *
        FROM material_quatation_detail
        INNER JOIN materials ON material_quatation_detail.material_or_item_id = materials.id WHERE material_quatation_detail.quotation_id = :quotation_id";
        $data['quotation_id'] = $quotation_id;
        return $this->query($query, $data);
    }

    public function updateM_deatails($data)
    {
        $errors = 0;

        // Ensure $data is properly initialized and contains the required arrays
        if (empty($data)) {
            return false;
        }

        foreach ($data as $item) {
            $batch_1_quantity = $item->batch_1_quantity - $item->send_quantity1;
            if ($batch_1_quantity < 0) {
                $batch_1_quantity = 0;
            }
            $batch_2_quantity = $item->batch_2_quantity - $item->send_quantity2;
            if ($batch_2_quantity < 0) {
                $batch_2_quantity = 0;
            }
            $remain_quantity = $batch_1_quantity + $batch_2_quantity;
            $id = $item->material_or_item_id;

            // Determine status
            $status = ($item->low_normal_limit_quantity >= $remain_quantity) ? 'LOW' : 'NORMAL';

            // Prepare data for update
            $db_data = [
                "batch_1_quantity" => $batch_1_quantity,
                "batch_2_quantity" => $batch_2_quantity,
                "remain_quantity" => $remain_quantity,
                "status" => $status,
                "id" => $id,
            ];

            // Prepare and execute the update query
            $query = "UPDATE materials
            SET
            batch_1_quantity = :batch_1_quantity,
            batch_2_quantity = :batch_2_quantity,
            remain_quantity = :remain_quantity,
            status = :status
            WHERE
                id = :id";
            $result = $this->query($query, $db_data);

            // Check for errors
            if (!$result) {
                $errors++;
            }
        }

        // Return true if no errors occurred, false otherwise
        return ($errors == 0);
    }

    public function sentM_quptation_count()
    {

        $query = "SELECT district, COUNT(*) AS request_count
        FROM material_quatation_detail
        GROUP BY district";

        return $this->query($query);
    }

    public function getAllMaterialQ($mid, $status)
    {
        $query = "SELECT material_requests.*, material_quatation_detail.quotation_id FROM material_quatation_detail INNER JOIN material_requests ON material_quatation_detail.request_id = material_requests.request_id INNER JOIN projects ON material_requests.project_id = projects.id WHERE projects.manager_id = :mid  AND material_quatation_detail.status = :status GROUP BY material_quatation_detail.quotation_id";
        $data['mid'] = $mid;
        $data['status'] = $status;
        return $this->query($query, $data);
    }
    public function getMaterialQ($p_id, $status)
    {
        $query = "SELECT material_requests.*, material_quatation_detail.quotation_id FROM material_quatation_detail INNER JOIN material_requests ON material_quatation_detail.request_id = material_requests.request_id WHERE material_requests.project_id = :p_id AND material_quatation_detail.status = :status GROUP BY material_quatation_detail.quotation_id";
        $data['p_id'] = $p_id;
        $data['status'] = $status;
        return $this->query($query, $data);
    }

    public function getReceiveReqDetails($q_id)
    {
        $query = "SELECT * FROM material_quatation_detail WHERE quotation_id = :q_id ";
        $data['q_id'] = $q_id;
        return $this->query($query, $data);
    }

    public function materialReceived($id = null)
    {
        $query = "UPDATE `material_quatation_detail` SET `status`='Received' WHERE `request_id` = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }
}
