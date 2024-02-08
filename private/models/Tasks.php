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
    
}
?>