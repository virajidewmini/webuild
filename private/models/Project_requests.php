<?php 
class Project_requests extends Model{

    protected $table="project_requests";
    protected $table6="land";
    protected $table7="user_land";
    protected $table8="user";
    protected $table9="staff";

    public function requests($value){
	
        $query = "SELECT *
                FROM $this->table
                INNER JOIN $this->table8 ON $this->table.user_id = $this->table8.id
                WHERE $this->table.id = :value";
    
        // Assuming you have a method named 'query' to execute the query
        return $this->query($query, [
            'value' => $value,
        ]);
    }


}
?>