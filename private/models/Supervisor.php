<?php 
class Supervisor extends Model{
    
    public function getProject($supervisor_id){

        $query = "select id from projects where supervisor_id = :supervisor_id && status= 'Ongoing'";
		$params = [
            'supervisor_id' => $supervisor_id,
            
        ];
        return $this->query($query,$params);
    }
    
}
?>