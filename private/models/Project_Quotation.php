<?php 
class Project_Quotation extends Model{
    protected $table = "quotation";

    public function getQuotation(){

        $query = "select * from quotation where project_id= :project_id && user_id=:user_id";
		$params = [
            'user_id'=>Auth::id(),
            'project_id'=>Auth::getProjectId()
        ];
        return $this->query($query,$params);
    }

    public function getTotalPrice($project_id){

        $query = "select total_amount from quotation where project_id= :project_id";
		$params = [
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }

    public function getPaymentDetail($project_id){

        $query = "select id,date,amount from payments where project_id= :project_id && installement_number=1";
		$params = [
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }

    

    // public function createproject($r_id, $q_id){

    //     $query = "SELECT * $table1.$column1 AS alias1, $table2.$column2 AS alias2, $table2.$columnToSelect AS $columnAlias 
    //     FROM $table1 
    //     INNER JOIN $table2 ON $table1.$column1 = $table2.$column2";
	// 	$data['id'] = $id;
    //     return $this->query($query,$data);
    // }

    public function validate($DATA){
        $this->errors = array();
        if(count($this->errors) == 0){
            return true;
        }
    
        return false;
    }

    public function remaining_req($value)
    {

        $query = "SELECT mr.request_id, mr.project_id, mr.level, mr.material_or_item_id, mr.material_or_item_name, mr.mesure_unit, (mr.quantity - mqd.send_total_quantity) AS remaining_quantity FROM project_material_quatation AS pmq JOIN material_requests AS mr ON pmq.request_id = mr.request_id JOIN material_quatation_detail AS mqd ON pmq.id = mqd.quatation_id AND mr.material_or_item_id = mqd.material_or_item_id WHERE pmq.status = 'Remaining' AND mr.request_id = :value";


        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function InsertQuotationData($data, $uploadedFiles)
    {
        $last_p_id = "";
        $query = "SELECT * FROM projects ORDER BY id DESC LIMIT 1";
        $result = $this->query($query);

        $last_p_id = $result[0]->id;
        $data["project_id"] = $last_p_id;

        $columns = "user_id, project_id, quotation, total_amount, created_date, status";

        // foreach data
        $errors = 0;
            $user_id = $data["user_id"];
            $project_id = $data["project_id"];
            $total_amount = $data['totalprice'];
            $status = 'Pending';
            $created_date = date("Y-m-d");
            $quotation = $uploadedFiles;


            $db_data = [
                "user_id" => $user_id,
                "project_id" => $project_id,
                "total_amount" => $total_amount,
                "status" => $status,
                "created_date" => $created_date,
                "quotation" => $quotation,
            ];

            $query = "insert into quotation ($columns) values (:user_id, :project_id, :quotation, :total_amount, :created_date, :status)";
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