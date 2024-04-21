<?php 
class Requests extends Model{
    protected $table = "material_requests";
   
    public function getRequest(){
        $query="SELECT DISTINCT request_id, project_id FROM material_requests WHERE status = 'Request' ";
        return($this->query($query));
    }
    
    
    public function getRequestDetails($request_id){
        $query="SELECT 	material_or_item_name,mesure_unit,quantity,send_district FROM `material_requests` WHERE request_id=:request_id";
        $data['request_id'] =$request_id;
        return($this->query($query,$data));
    }

    public function toQuotation($request_id){
        $query="SELECT *, materials.id AS m_id
        FROM material_requests
        INNER JOIN materials ON material_requests.material_or_item_id = materials.id
        WHERE request_id = :request_id";
        $data['request_id'] =$request_id;
        return($this->query($query,$data));
    }
}

?>
