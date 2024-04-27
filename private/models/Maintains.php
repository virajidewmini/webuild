<?php

class Maintains extends Model
{
    protected $table = "material_requests_to_coordinator";

    public function getMaintainRequest()
    {
        $query = "SELECT *
        FROM material_requests_to_coordinator
        ORDER BY 
            CASE 
                WHEN status = 'Pending' THEN 1
                WHEN status = 'Notified' THEN 2
                WHEN status = 'Recieved' THEN 3
            END";
        return $this->query($query);
    }

    public function updateMstore($id, $material_id)
    {
        $query = "SELECT * FROM material_requests_to_coordinator       
        WHERE id = :id";
        $result = $this->query($query, ['id' => $id]);

        $query1 = "SELECT * FROM materials       
        WHERE id = :material_id";
        $material = $this->query($query1, ['material_id' => $material_id]);

        $errors = 0;
        $batch_1_quantity = $material[0]->batch_1_quantity;
        $batch_2_quantity = $material[0]->batch_2_quantity;

        if ($material[0]->batch_1_quantity < $material[0]->batch_2_quantity) {
            $batch_1_quantity = $material[0]->batch_1_quantity + $result[0]->requested_quantity;
        } elseif ($material[0]->batch_1_quantity > $material[0]->batch_2_quantity) {
            $batch_2_quantity = $material[0]->batch_2_quantity + $result[0]->requested_quantity;
        } elseif ($material[0]->batch_1_quantity == $material[0]->batch_2_quantity) {
            $batch_1_quantity = $material[0]->batch_1_quantity + $result[0]->requested_quantity;
        } else {
            $batch_1_quantity = $material[0]->batch_1_quantity + $result[0]->requested_quantity;
        }

        $remain_quantity = $batch_1_quantity + $batch_2_quantity;
        if ($remain_quantity > $material[0]->low_normal_limit_quantity) {
            $status = "NORMAL";
        } else {
            $status = "LOW";
        }

        $db_data = [
            "batch_1_quantity" => $batch_1_quantity,
            "batch_2_quantity" => $batch_2_quantity,
            "remain_quantity" => $remain_quantity,
            "status" => $status,
            "id" => $material_id
        ];
        $db_data1 = [
            "id" => $id
        ];

        $query2 = "UPDATE materials
        SET 
        batch_1_quantity = :batch_1_quantity,
        batch_2_quantity = :batch_2_quantity,
        remain_quantity = :remain_quantity,
        status = :status
        WHERE
            id = :id";
        $this->query($query2, $db_data);

        $query2 = "UPDATE material_requests_to_coordinator
        SET 
        status = 'Recieved'
        WHERE
            id = :id";
        $this->query($query2, $db_data1);


        return $errors === 0;
    }

    // Other methods...
}
