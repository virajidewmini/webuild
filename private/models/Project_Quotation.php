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

        $query = "select date,amount from payments where project_id= :project_id && installement_number=1";
		$params = [
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }

    
}


?>