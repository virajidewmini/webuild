<?php

//manager dashboard controller
class Pmdashboard extends Controller
{

    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('/login');
        }
        $pmi = Auth::getid();

        $project = new Projects();
        $data3 = $project->toStart($pmi);

        $project_request = new Project_requests();
        $data2 = $project_request->LatestReq($pmi);

        $pmi = Auth::getId();
        $report = new ProgressReport();

        $data = $report->viewAllReport($pmi);

        $allocated_task = new Allocated_tasks();
        $data1 = $allocated_task->where("status", "Ongoing");

        $data4 = $project_request->where('status', 'Paid');

        $complaint = new C_Complaint();
        $data5 = $complaint->man_viewComplanit_noty($pmi);

        $this->view('pmdashboard', [
            'rows' => $data,
            'rows1' => $data1,
            'rows2' => $data2,
            'rows3' => $data3,
            'rows4' => $data4,
            'rows5' => $data5,
        ]);
    }

    public function subtask($id = null)
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $project_task = new Project_tasks();
        $row = $project_task->where('task_id', $id);


        $this->view('pmongoingsubtask_view', [
            'row' => $row,
        ]);
    }
}
