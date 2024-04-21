
<?php
class Project_material_request extends Model
{

    protected $table = "material_requests";

    public function getRequestcount()
    {

        $query = "SELECT SUM(request_count) AS total_rows
        FROM (
            SELECT COUNT(*) AS request_count
            FROM material_requests
            WHERE status = 'request'
            GROUP BY id
        ) AS subquery_alias";

        return $this->query($query);
    }

    public function getRequest_types()
    {

        $query = "SELECT status,COUNT(*) AS request_count
        FROM material_requests
        GROUP BY status";

        return $this->query($query);
    }

    
}
?>