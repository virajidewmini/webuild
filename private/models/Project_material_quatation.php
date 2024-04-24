
<?php
class Project_material_quatation extends Model
{

    protected $table = "project_material_quatation";

    protected $afterSelect = [
        'get_request',
    ];

    public function get_request($data)
    {


        $project_material_request = new project_material_request();
        foreach ($data as $key => $row2) {
            if (isset($row2->request_id)) {
                $result = $project_material_request->where('id', $row2->request_id);
                $data[$key]->req = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

    public function toRecive_material($id = null)
    {

        $query1 = "SELECT * FROM project_material_quatation WHERE id NOT IN (SELECT request_id FROM project_material_request WHERE project_id = :id)";
        $query = "SELECT * FROM project_material_quatation WHERE id NOT IN (SELECT request_id FROM project_material_request WHERE project_id = :id)";
        $data['id'] = $id;
        return $this->query($query, $data);
    }
}
?>