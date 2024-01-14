
<?php 
class AllocateTask extends Model{
     protected $table = "task_coworker";

    public function getTask($id){
        $query = "select tasks.id,tasks.task_name,allocated_task.status,allocated_task.progress from tasks inner join allocated_task on tasks.id = allocated_task.task_id where allocated_task.project_id = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
    }

    public function getMainTask($id){
        $query ="select task_name from tasks where id= :id";
        $data['id'] = $id;
        return $this->query($query,$data);
    }

    public function getSubTask($id){
        $query ="select sub_task_name,sub_task_details from sub_tasks where task_id= :id";
        $data['id'] = $id;
        return $this->query($query,$data);
    }
    
}
?>