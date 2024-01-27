<?php 
class AllocateCoworker extends Model{
    protected $table = "allcate_coworker";  

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
}
?>