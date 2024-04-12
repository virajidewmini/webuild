<?php 
class Project_Quotation extends Model{
    protected $table = "quotation";

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

    
}


?>