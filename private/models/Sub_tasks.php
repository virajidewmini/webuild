<?php 
class Sub_tasks extends Model{
    protected $table = "sub_tasks";

    protected $afterSelect = [
        'get_task',
    ];

    public function validate($DATA){
        

        return false;
    }

    public function get_task($data)
    {

        $task = new Tasks();
        foreach ($data as $key => $row1) {
            if (isset($row1->task_id)) {
                $result = $task->where('id', $row1->task_id);
                $data[$key]->task = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

}
?>