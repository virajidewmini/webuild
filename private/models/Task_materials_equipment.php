<?php 
class Task_materials_equipment extends Model{
    protected $table = "task_materials_equipment";

    protected $afterSelect = [
        'get_material',
    ];

    public function dmaterial($model_id, $level){

        $query= "SELECT task_materials_equipment.* FROM tasks
        INNER JOIN task_materials_equipment ON tasks.id = task_materials_equipment.task_id
        WHERE tasks.model_id = :model_id
        AND tasks.level = :level";
        $data =  $this->query($query,[
            'model_id'=>$model_id,
            'level'=>$level
        ]);

        return $data;
    }
    
    public function validate($DATA){
        $this->errors = array();
        if(count($this->errors) == 0){
            return true;
        }
    
        return false;
    }

    public function get_material($data)
    {

        $materials = new Materials();
        foreach ($data as $key => $row1) {
            if (isset($row1->material_id)) {
                $result = $materials->where('id', $row1->material_id);
                $data[$key]->material = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }
}
?>