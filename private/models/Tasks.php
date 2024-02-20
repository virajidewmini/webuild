<?php 
class Tasks extends Model{
    
    protected $table = "tasks";

    public function viewlevel($id){

        $query = "SELECT DISTINCT level
        FROM tasks
        WHERE 'model_id'=:id";

        return $this->query($query,$id);
    }

    public function taskCount($id) {
        $query = "SELECT COUNT(*) AS task_count
                  FROM tasks
                  WHERE model_id = :id";
        $data['id'] = $id;
    
        return $this->query($query, $data);
    }

    public function toDoTask($id=null){

            $query = "SELECT * FROM tasks WHERE id NOT IN (SELECT task_id FROM allocated_task WHERE project_id = :id)";
            $data['id'] = $id;
            return $this->query($query,$data);
    
    }
    
}
?>