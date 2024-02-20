<?php

//Project model
class Projects extends Model
{

    protected $table = "projects";

    protected $afterSelect = [
        'get_user',
        'get_m_user',
        'get_u_user',
        'get_model',
        'get_task',
        'get_req',
    ];

    public $user_id;

    public function validate($DATA)
    {
        $this->errors = array();
        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }


    public function get_user($data)
    {


        $staff = new Staffs();
        foreach ($data as $key => $row2) {
            if (isset($row2->supervisor_id)) {
            $result = $staff->where('id', $row2->supervisor_id);
            $data[$key]->staff = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

    //get projects according to 
    public function getProjectsInMonth($action, $period)
    {

        $query = "SELECT COUNT(*) AS total FROM projects 
        WHERE action = :action AND 
            CASE 
                WHEN :period = 'first'  THEN date LIKE '____-01-__' OR date LIKE '____-02-__' OR date LIKE '____-03-__'
                WHEN :period = 'second' THEN date LIKE '____-04-__' OR date LIKE '____-05-__' OR date LIKE '____-06-__'
                WHEN :period = 'third' THEN date LIKE '____-07-__' OR date LIKE '____-08-__' OR date LIKE '____-09-__'
                WHEN :period = 'fourth' THEN date LIKE '____-10-__' OR date LIKE '____-12-__' OR date LIKE '____-11-__'
                
                ELSE FALSE
            END 
        ";

        return $this->query($query, [
            'action' => $action,
            'period' => $period,
        ]);
    }



    public function get_m_user($data)
    {

        $staff = new Staffs();
        foreach ($data as $key => $row1) {
            if (isset($row1->manager_id)) {
                $result = $staff->where('id', $row1->manager_id);
                $data[$key]->staff_m = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

    public function get_u_user($data)
    {

        $user = new Users();
        foreach ($data as $key => $row1) {
            if (isset($row1->user_id)) {
                $result = $user->where('id', $row1->user_id);
                $data[$key]->user = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

    public function get_model($data)
    {

        $mdl = new Models();
        foreach ($data as $key => $row1) {
            if (isset($row1->model_id)) {
                $result = $mdl->where('id', $row1->model_id);
                $data[$key]->mdl = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
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

    public function get_req($data)
    {

        $req = new Project_requests();
        foreach ($data as $key => $row1) {
            if (isset($row1->project_request_id)) {
                $result = $req->where('id', $row1->project_request_id);
                $data[$key]->req = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }

    public function viewProjectDetail($id)
    {

        $query = "SELECT *
        FROM projects
        INNER JOIN project_requests ON projects.project_request_id = project_requests.id
        WHERE projects.id = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }

    public function ongoingTask($id)
    {

        $query = "SELECT *
        FROM allocated_task
        WHERE (allocated_task.status = 'Ongoing' OR allocated_task.status = 'Done' OR allocated_task.status = 'Suspend') AND allocated_task.project_id = :id";

        $data['id'] = $id;
        return $this->query($query, $data);
    }

    public function completeTask($id)
    {

        $query = "SELECT *
        FROM allocated_task
        WHERE allocated_task.status = 'complete' AND allocated_task.project_id = :id";

        $data['id'] = $id;
        return $this->query($query, $data);
    }
}
