<?php
class Allocated_tasks extends Model
{
    protected $table = "allocated_task";


    protected $afterSelect = [
        'get_task',
    ];


    public function validate($DATA)
    {

        $this->errors = array();

        /**
        Check task with Already added
         **/
        $project = new Projects();

        if (empty($DATA['project_id'])) {
            $this->errors['project_id'] = "Project ID can't be empty";
        }

        elseif (preg_match('/^\d{1,4}\d{0,9}$/', $DATA['project_id'])) {
            if($project->where('id', $DATA['project_id'])){
                if ($this->where2('project_id', $DATA['project_id'], 'task_id', $DATA['task_id'])) {
                    $this->errors['project_id'] = "The task already added to this project ";
                }
            }
            else{
                $this->errors['project_id'] = "Invalid Project ID";
            }
        }
        else {
            $this->errors['project_id'] = "Invalid Project ID; Enter only the digits";
        }


        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function totalProgress($id)
    {

        $query = "SELECT SUM(progress) AS total_progress
        FROM allocated_task
        WHERE project_id = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }

    public function get_task($data)
    {

        $task = new Tasks();
        foreach ($data as $key => $row1) {
            if (isset($row1->task_id)) {
                $result = $task->where('id', $row1->task_id);
                $data[$key]->task = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

    //get ongoing all tasks of a manager
    public function OngoingAllTask($mid)
    {

        $query = "SELECT allocated_task.* FROM allocated_task INNER JOIN projects ON allocated_task.project_id = projects.id WHERE projects.manager_id = :mid AND allocated_task.status = 'Ongoing' ORDER BY allocated_task.est_start_date ASC";

        $data['mid'] = $mid;
        return $this->query($query, $data);
    }

    public function AllowTask($p_id)
    {

        $query = "SELECT * FROM allocated_task WHERE project_id = :p_id AND (status = 'Ongoing' OR status = 'Complete') ORDER BY task_id DESC LIMIT 1";

        $data['p_id'] = $p_id;
        return $this->query($query, $data);
    }

    public function PMAcceptTask($p_id, $t_id)
    {

        $query = "UPDATE `allocated_task` SET `status`='Done' WHERE project_id = :p_id AND task_id = :t_id";

        $data['p_id'] = $p_id;
        $data['t_id'] = $t_id;
        return $this->query($query, $data);
    }

    public function PMRejectTask($p_id, $t_id)
    {

        $query = "UPDATE `allocated_task` SET `status`='Pending' WHERE project_id = :p_id AND task_id = :t_id";

        $data['p_id'] = $p_id;
        $data['t_id'] = $t_id;
        return $this->query($query, $data);
    }
}
