<?php

//coordinator dashboard controller
class Pmtask extends Controller
{

    public function index()
    {

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $project_id = "";
        $pmid = Auth::getId();
        $data2 = array();
        $projects = new Projects();
        $data = $projects->where2('status', 'Ongoing', 'manager_id', $pmid);

        $allocated_task = new Allocated_tasks();
        if (isset($_GET['project_id'])) {
            if ($_GET['project_id']) {
                $project_id = $_GET['project_id'];
                $data1 = $allocated_task->where2('status', 'Ongoing', 'project_id', $project_id);
                $project_id = $_GET['project_id'];
                $data2 = $projects->get_allToDoTasks_P($project_id);
            }
            else {
                $data1 = $allocated_task->OngoingAllTask($pmid);
                $data2 = array();
            }
        } 
        else {
            $data1 = $allocated_task->OngoingAllTask($pmid);
            $data2 = array();
        }
        

        $this->view('pmtask', [
            'rows' => $data,
            'rows1' => $data1,
            'rows2' => $data2,
        ]);
    }

    public function add($id = null, $p_id = null)
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $errors = array();
        $success = "";
        $allocated_tasks = new Allocated_tasks();
        $allocated_subtasks = new Allocated_subtasks();


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($allocated_tasks->validate($_POST)) {

                $arr['status'] = 'Pending';
                $arr['project_id'] = $_POST['project_id'];
                $arr['task_id'] = $_POST['task_id'];
                $allocated_tasks->insert($arr);
                $allocated_subtasks->insertSubtasks($_POST);

                $success = array(
                    'message' => 'Task added successfully'
                );

                // $this->redirectWithParams('pmtask', $success);
            } else {
                $errors = $allocated_tasks->errors;
            }
        }
        $sub_task = new Sub_tasks();
        $row = $sub_task->where('task_id', $id);



        $this->view('pmtask_add', [
            'row' => $row,
            'project_id' => $p_id,
            'errors' => $errors,
        ]);
    }

    public function taskDetails($id = null)
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $sub_task = new Sub_tasks();
        $row = $sub_task->where('id', $id);



        $this->view('pmtaskdetails', [
            'row' => $row,
        ]);
    }
}
