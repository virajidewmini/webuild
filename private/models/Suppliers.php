
<?php 
class Suppliers extends Model{
    
    protected $table = "suppliers";
    
    public function getSupplier($value){


        $query="SELECT * FROM project_requests 
        INNER JOIN land ON project_requests.land_id = land.id 
        
        WHERE project_requests.user_id = :value AND project_requests.status_of_land='company' "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }





















}
?>