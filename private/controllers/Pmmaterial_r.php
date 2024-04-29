<?php

//Manager materials controller
class Pmmaterial_r extends Controller
{

    public function index($project_id = null)
    {

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $pmid = Auth::getId();

        $projects = new Projects();
        $data = $projects->where('id',$project_id);

        $notification = new Notifications();

        $task = new Tasks();
        $data1 = array();
        $data2 =  $data2 = $task->toReqlevel($project_id);
        $data3 = array();



        
        if (isset($_GET['model_id'])) {
            $model = $_GET['model_id'];
           
        }
        $Task_materials_equipment = new Task_materials_equipment();
        if (isset($_GET['level'])) {
            $level = $_GET['level'];
            $data3 = $Task_materials_equipment->dmaterial($model, $level);
        }

        $errors = array();


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $material_request = new Material_requests();
            if ($material_request->validate($_POST)) {
                $material_request->insertMaterial($_POST);
                $notfy = $notification->materialRequest();
                $notification->insert($notfy);
                $this->redirect('Pmmaterial');
            } else {
                $errors = $material_request->errors;
            }

            die;
        }
        $this->view('pmmaterial_r', [
            'rows' => $data,
            'rows1' => $data1,
            'rows2' => $data2,
            'rows3' => $data3,
            'project_id' => $project_id,
            'errors' => $errors,
        ]);
    }


    public function remaining_request($r_id = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('staff_login');
        }

        $pmid = Auth::getId();

        $errors = array();

        $material_request = new Material_requests();
        $notification = new Notifications();


        $data = $material_request->remaining_req_details($r_id);


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($material_request->validate($_POST)) {
                $material_request->statusChange($r_id);
                $material_request->insertMaterial($_POST);
                $notfy = $notification->materialRequest();
                $notification->insert($notfy);

                echo '<script>window.history.go(-2);</script>';
            } else {
                $errors = $material_request->errors;
            }

            die;
        }


        $this->view('pmremaining_r', [
            'rows' => $data,
            'errors' => $errors,
        ]);
    }
}
