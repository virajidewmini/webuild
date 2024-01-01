<?php 
class C_Complaint extends Model{
    protected $table = "complaint";

    public function viewComplanitDetail($id){

        $query = "select * from complaint where id = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
    }
    
}


?>

