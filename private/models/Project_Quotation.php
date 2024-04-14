<?php 
class Project_Quotation extends Model{
    protected $table = "quotation";

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

    
}


?>