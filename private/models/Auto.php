<?php 
class Auto extends Model{

     public function allocate($project_id,$task_id,$start_date,$end_date,$estimate){

        $results = [];
        
        foreach ($estimate as $item) {
            $role = $item->role;
            $count = (int)$item->count;
        
        $query="insert into allocate_coworker (emp_id, project_id, task_id, start_date, end_date)
        SELECT id AS emp_id, :project_id, :task_id, :start_date, :end_date
        FROM coworker
        WHERE id NOT IN (
            SELECT emp_id
            FROM allocate_coworker
            WHERE
            (start_date <= :start_date AND end_date >= :start_date) OR
            (start_date <= :end_date AND end_date >= :end_date) OR
            (start_date >= :start_date AND end_date <= :end_date)
        )
        AND role = :role 
        AND district = 'Galle'
        ORDER BY 4 ASC
        LIMIT $count ";
        
        $params = [
            'project_id' => $project_id,
            'task_id' => $task_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'role' => $role,
            
        ];
        $result = $this->query($query, $params);
    
    
        $results[] = $result;
        var_dump($result);
        } 
        return $results;
     }
    
}
?>