
<?php 
class SubTask extends Model{
    protected $table = "allocated_subtask";
    public function getStatus($task_id,$project_id){

        $query = "select status from allocated_subtask where task_id= :task_id && project_id= :project_id";
		$params = [
            'task_id' => $task_id,
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }

    

    public function UpdateStatus($task_id,$project_id){

        $query = "update allocated_task set status='Complete' where task_id= :task_id && project_id= :project_id";
		$params = [
            'task_id' => $task_id,
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }
    public function UpdateSuspendStatus($task_id,$project_id){

        $query = "update allocated_task set status='Suspend' where task_id= :task_id && project_id= :project_id";
		$params = [
            'task_id' => $task_id,
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }
    

    public function UpdateOngoingStatus($task_id,$project_id){

        $query = "update allocated_task set status='Ongoing' where task_id= :task_id && project_id= :project_id";
		$params = [
            'task_id' => $task_id,
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }

    public function getweight($id){

        $query = "select weight from sub_tasks where id= :id && project_id= :project_id";
		$params = [
            'id' => $id
        ];
        return $this->query($query,$params);
    }
    
    public function getPreviousProgress($id,$project_id){

        $query = "select progress from allocated_tasks where task_id= :task_id && project_id= :project_id";
		$params = [
            'task_id' => $id,
            'project_id'=>$project_id
        ];
        return $this->query($query,$params);
    }
    
}
?>