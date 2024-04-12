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


        $this->view('pmcreateproject', [
            'rows' => $data
        ]);
    }
}
