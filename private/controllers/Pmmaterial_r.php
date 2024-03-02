<?php

//Manager materials controller
class Pmmaterial_r extends Controller
{

    public function index($p_id = null, $mdl = null,)
    {

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $pmid = Auth::getId();

        $projects = new Projects();
        $data = $projects->where2('status', 'ongoing', 'manager_id', $pmid);

        $project_request = new Project_requests();

        if (isset($_GET['project_request_id'])) {
            $project_request_id = $_GET['project_request_id'];
            $data1 = $project_request->where('id', $project_request_id);
        }

        $task = new Tasks();
        if (isset($_GET['model_id'])) {
            $model = $_GET['model_id'];
            $data2 = $task->levelwhere('level', 'model_id', $model);
        }

        if (isset($_GET['level'])) {
            $level = $_GET['level'];
            $data3 = $task->dmaterial($model, $level);
        }

        $errors = array();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $material_request = new Material_requests();
            if ($material_request->validate($_POST)) {

                $material_request->update_p_m_request($_POST, $pmid);
                $material_request->inserMaterial($_POST);
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
            'errors' => $errors,
        ]);
    }

    public function p_thruogh_request($id = null, $req = null, $model = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('staff_login');
        }

        $pmid = Auth::getId();

        $projects = new Projects();

        $projects = new Projects();
        $data = $projects->where('id', $id);

        $project_request = new Project_requests();
        $data1 = $project_request->where('id', $req);

        $task = new Tasks();
        $data2 = $task->levelwhere('level', 'model_id', $model);

        if (isset($_GET['level'])) {
            $level = $_GET['level'];
            $data3 = $task->dmaterial($model, $level);
        }

        $errors = array();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $material_request = new Material_requests();
            if ($material_request->validate($_POST)) {

                $material_request->update_p_m_request($_POST, $pmid);
                $material_request->inserMaterial($_POST);
                $this->redirect('Pmongoingproject/projectdeatils/1/1/apple123/1/1');
            } else {
                $errors = $material_request->errors;
            }

            die;
        }


        $this->view('pmmaterial_r_t_p', [
            'rows' => $data,
            'rows1' => $data1,
            'rows2' => $data2,
            'rows3' => $data3,
            'errors' => $errors,
        ]);
    }
}
