<?php 
class TaskStatus extends Model{
    public function updateStatus($project_id,$task_id){

        $query = "select reference_id from photograph where project_id = :project_id & task_id= :task_id";
		$params = [
            'project_id' => $project_id,
            'task_id' => $task_id
        ];
        return $this->query($query,$params);
    }
    
}
?>

