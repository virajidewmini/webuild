<?php

//Manager members controller
class Pmcreateproject extends Controller
{


    public function index($req_id = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('/login');
        }
        $pmi = Auth::getid();

        $project_request = new Project_requests();
        $data = $project_request->where('id', $req_id);

        $project = new Projects();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($project->validate($_POST)) {

                $arr['manager_id'] = $_POST['manager_id'];
                $arr['project_request_id'] = $req_id;
                $arr['date'] = $_POST['date'];
                $arr['final_date'] = $_POST['final_date'];
                $arr['status'] = 'Ongoing';

                $project->insert($arr);

                $arr1['status'] = 'Done';
                $project_request->update($req_id, $arr1);


                $this->redirect('pmdashboard');
            }
        }

        $this->view('pmcreateproject', [
            'rows' => $data
        ]);
    }
}