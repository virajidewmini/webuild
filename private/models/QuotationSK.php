<?php

class QuotationSK extends Model
{
    protected $table = "material_quatation_detail";


    // Other methods...

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

        if ($data['status']){
            $query1 = "UPDATE `material_requests` SET `status`='Remain' WHERE request_id = :request_id";
            $arr2['request_id'] = $data["request_id"];
            $this->query($query1, $arr2);
        }else{
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
            $send_total_quantity = $data["total_quantity"];
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
            // echo $query;
            $result = $this->query($query, $db_data);
            
            if (!$result) {
                $errors++;
            }
        }

        if ($errors == 0)
            return true;

        return $quotation_id;
    }

    // public function updateMaterial($quotation_id)
    // {

    //     $query = "SELECT *, materials.id AS m_id
    //     FROM material_quatation_detail
    //     INNER JOIN materials ON material_quatation_detail.material_or_item_id = materials.id WHERE material_quatation_detail.quotation_id = :quotation_id";
    //     $arr['quotation_id'] = $quotation_id;
    //     $result = $this->query($query, $arr);


    //     $errors = 0;

    //     $row_count = count($result);
    //     for ($i = 0; $i < $row_count; $i++) {
    //         $batch_1 = $result[$i]->$batch_1_quantity - $result[$i]->$send_quantity1;
    //         $batch_2_quantity = $result['batch_2_quantity'][$i] - $result['send_quantity2'][$i];
    //         $remain_quantity = $batch_1 + $batch_2_quantity;
    //         $material_or_item_id = $result['material_or_item_id'][$i];
    //         if ($result['low_normal_limit_quantity'][$i] < $remain_quantity || $result['low_normal_limit_quantity'][$i] == $remain_quantity){
    //             $status = 'LOW';
    //         }else{
    //             $status = 'NORMAL';
    //         }


    //         $db_data = [
    //             "batch_1_quantity" => $batch_1_quantity,
    //             "batch_2_quantity" => $batch_2_quantity,
    //             "remain_quantity" => $remain_quantity,
    //             "material_or_item_id" => $material_or_item_id,
    //             "status" => $status,
    //         ];

    //         $query = "UPDATE materials
    //         SET
    //         batch_1_quantity = :batch_1_quantity,
    //         batch_2_quantity = :batch_2_quantity,
    //         remain_quantity = :remain_quantity,
    //         status = :status,
    //         WHERE
    //             id = :material_or_item_id";
    //         // echo $query;
    //         $result = $this->query($query, $db_data);
    //         if (!$result) {
    //             $errors++;
    //         }
    //     }

    //     if ($errors == 0)
    //         return true;

    //     return false;
    // }


}
