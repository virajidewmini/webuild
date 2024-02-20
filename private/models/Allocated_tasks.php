<?php 
class Allocated_tasks extends Model{
    protected $table = "allocated_task";

    protected $afterSelect = [
        'get_task',
    ];


    public function validate($DATA){

        $this->errors = array();


        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }

    public function totalProgress($id){

    $query = "SELECT SUM(progress) AS total_progress
        FROM allocated_task
        WHERE project_id = :id";
    $data['id'] = $id;
    return $this->query($query,$data);
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

    public function pendingTask($id)
    {

        $query = "SELECT *
        FROM allocated_task
        WHERE allocated_task.status = 'Pending' AND allocated_task.project_id = :id";

        $data['id'] = $id;
        return $this->query($query, $data);
    }
    
}
?>