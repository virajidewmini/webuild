
<?php 
class AllocateTask extends Model{
     protected $table = "task_coworker";

    public function getTask($id){
        $query = "select tasks.id,tasks.task_name,allocated_task.status,allocated_task.progress, allocated_task.est_start_date from tasks inner join allocated_task on tasks.id = allocated_task.task_id where allocated_task.project_id = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
    }

    public function getMainTask($id){
        $query ="select task_name from tasks where id= :id";
        $data['id'] = $id;
        return $this->query($query,$data);
    }

    public function getSubTask($id){
        $query ="select id,sub_task_name,sub_task_details from sub_tasks where task_id= :id";
        $data['id'] = $id;
        return $this->query($query,$data);
    }

    public function getSubTaskDetails($id){
        $query ="select sub_tasks.id,sub_tasks.sub_task_name,sub_tasks.sub_task_details,allocated_subtask.status from allocated_subtask inner join sub_tasks where allocated_subtask.project_id=:project_id  and allocated_subtask.task_id = :id and allocated_subtask.subtask_id=sub_tasks.id";
        $params = [
            'project_id' => Auth::getProjectId(),
            'id' => $id
        ];  
        return $this->query($query,$params);
    }

    public function getLevel($id){
        
        $query ="select level from tasks where id= :id ";
        $data['id'] = $id;
        return $this->query($query,$data);
    }
    public function getTaskByLevel($level){
        
        $query ="select id from tasks where level= :level ";
        $data['level'] = $level;
        return $this->query($query,$data);
    }
    
    public function getAverageProgress(){
        
        $query ="select avg(progress) as average from allocated_task where project_id= :project_id ";
        $data['project_id'] = Auth::getProjectId();
        return $this->query($query,$data);
    }
    
    public function getStartDate($id,$project_id){
        
        $query ="select est_start_date from allocated_task where task_id= :id && project_id= :project_id";
        $data['project_id'] = $project_id;
        $data['id'] = $id;
        return $this->query($query,$data);
    }

    public function getDuration($id){
        $query ="select duration_in_days from tasks where id= :id";
        $data['id'] = $id;
        return $this->query($query,$data);
    }

    public function getFeedback($task_id){
        $query ="select feedback from allocated_task where project_id= :project_id && task_id=:task_id";
        $params = [
            'project_id' => Auth::getProjectId(),
            'task_id' => $task_id
        ];  
        return $this->query($query,$params);
    }

    public function getStatus($task_id){
        $query ="select status from allocated_task where project_id= :project_id && task_id=:task_id";
        $params = [
            'project_id' => Auth::getProjectId(),
            'task_id' => $task_id
        ];  
        return $this->query($query,$params);
    }

    public function updateFeedback($task_id,$feedback){
        $query ="update allocated_task set feedback= :feedback where project_id= :project_id && task_id=:task_id";
        $params = [
            'project_id' => Auth::getProjectId(),
            'task_id' => $task_id,
            'feedback'=>$feedback
        ];  
        return $this->query($query,$params);
    }

    
    
}
?>