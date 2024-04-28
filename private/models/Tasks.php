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

    public function toReqlevel($project_id){


        $query= "SELECT * FROM ( SELECT projects.id AS project_id, tasks.level AS task_level FROM projects INNER JOIN tasks ON projects.model_id = tasks.model_id WHERE projects.id = :project_id GROUP BY tasks.level ) AS p WHERE p.task_level NOT IN ( SELECT mr.level FROM ( SELECT level FROM material_requests WHERE project_id = :project_id GROUP BY level ) AS mr )";

        return $this->query($query,[
            'project_id'=>$project_id
        ]);;
    }
    
}
?>