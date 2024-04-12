
<?php 
class Project_material_quatation extends Model{
    
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

    
}
?>