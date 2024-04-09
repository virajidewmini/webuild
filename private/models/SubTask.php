
<?php 
class SubTask extends Model{
    protected $table = "allocated_subtask";
    public function getStatus($task_id){

        $query = "select status from allocated_subtask where task_id= :task_id";
		$params = [
            'task_id' => $task_id
        ];
        return $this->query($query,$params);
    }

    

    public function UpdateStatus($task_id){

        $query = "update allocated_task set status='Complete' where task_id= :task_id";
		$params = [
            'task_id' => $task_id
        ];
        return $this->query($query,$params);
    }
    public function UpdateSuspendStatus($task_id){

        $query = "update allocated_task set status='Suspend' where task_id= :task_id";
		$params = [
            'task_id' => $task_id
        ];
        return $this->query($query,$params);
    }
    

    public function UpdateOngoingStatus($task_id){

        $query = "update allocated_task set status='Ongoing' where task_id= :task_id";
		$params = [
            'task_id' => $task_id
        ];
        return $this->query($query,$params);
    }
    
}
?>