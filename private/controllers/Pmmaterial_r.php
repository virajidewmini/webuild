<?php

//Manager materials controller
class Pmmaterial_r extends Controller
{

    public function index()
    {

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $pmid = Auth::getId();

        $projects = new Projects();
        $data = $projects->where2('status', 'Ongoing', 'manager_id', $pmid);

        if (isset($_GET['project_id'])) {
            $project_id = $_GET['project_id'];
            $data1 = $projects->where('id', $project_id);
        }

        $task = new Tasks();
        if (isset($_GET['model_id'])) {
            $model = $_GET['model_id'];
            $data2 = $task->levelwhere('level', 'model_id', $model);
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

    public function remaining_request($id = null, $m_req = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('staff_login');
        }

        $pmid = Auth::getId();

        $errors = array();

        $material_request = new Material_requests();
        
        
        $data = $material_request->remaining_req($m_req);
        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if ($material_request->validate($_POST)) {
                $material_request->statusChange($id);
                $material_request->insertMaterial($_POST);
                $this->redirect('Pmongoingproject/projectdeatils/1/1/apple123/1/1');
            } else {
                $errors = $material_request->errors;
            }

            die;
        }


        $this->view('pmmaterial_r_t_p', [
            'rows' => $data,
            'errors' => $errors,
        ]);
    }
}
