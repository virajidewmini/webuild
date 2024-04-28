<?php
class Allocated_subtasks extends Model
{
    protected $table = "allocated_subtask";

    protected $afterSelect = [
        'get_subtask',

    ];



    public function validate($DATA)
    {


        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function insertSubtasks($data)
    {

        $columns = "project_id, task_id, subtask_id, status";

        $errors = 0;
        $count_data = count($data["subtask_id"]);
        for ($i = 0; $i < $count_data; $i++) {
            $project_id = $data["project_id"];
            $task_id = $data["task_id"];
            $subtask_id = $data["subtask_id"][$i];
            $status = "Pending";

            $db_data = [
                "project_id" => $project_id,
                "task_id" => $task_id,
                "subtask_id" => $subtask_id,
                "status" => $status
            ];

            $query = "INSERT INTO allocated_subtask ($columns) VALUES (:project_id, :task_id, :subtask_id, :status)";
            $result = $this->query($query, $db_data);
            if (!$result) {
                $errors++;
            }
        }

        return $errors === 0;
    }

    public function get_subtask($data)
    {

        $subtask = new Sub_tasks();
        foreach ($data as $key => $row1) {
            if (isset($row1->subtask_id)) {
                $result = $subtask->where('id', $row1->subtask_id);
                $data[$key]->subtask = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }
}
