<?php 
class AllocateCoworker extends Model{
    protected $table = "allocate_coworker"; 
    
    protected $afterSelect = [
        'get_coworker',
        'get_task'
    ];

    public function getPhone($project_id,$task_id){
        $query = "select coworker.phone_no from coworker inner join allocate_coworker on coworker.id = allocate_coworker.emp_id where allocate_coworker.project_id = :project_id and allocate_coworker.task_id = :task_id";
        $params = [
            'project_id' => $project_id,
            'task_id' => $task_id
        ];
        return $this->query($query,$params);
    }

    public function getData($project_id,$task_id){
        
        $query = "select coworker.id, coworker.role, coworker.name, coworker.phone_no from coworker inner join allocate_coworker on coworker.id = allocate_coworker.emp_id where allocate_coworker.project_id = :project_id and allocate_coworker.task_id = :task_id";
		$params = [
            'project_id' => $project_id,
            'task_id' => $task_id
        ];
        return $this->query($query,$params);
    }

    public function get_coworker($data)
    {

        $coworker = new CoworkerModel();
        foreach ($data as $key => $row1) {
            if (isset($row1->emp__id)) {
                $result = $coworker->where('id', $row1->emp__id);
                $data[$key]->coworker = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
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