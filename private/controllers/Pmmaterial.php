<?php

//Manager materials controller
class Pmmaterial extends Controller
{

    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('staff_login');
        }
        $pmid = Auth::getId();
        $projects = new Projects();
        $data = $projects->where2('status', 'Ongoing', 'manager_id', $pmid);

        $material_requests = new Material_requests();
        $quotations = new QuotationSK();

        if (isset($_GET['project_id'])) {
            if (($_GET['project_id'])) {
                $project_id = $_GET['project_id'];
                $data2 = $material_requests->getMaterialRequest($project_id);
                $data3 = $quotations->getMaterialQ($project_id, 'Sent');
                $data4 = $quotations->getMaterialQ($project_id, 'Received');
            }
            else {
                $data2 = $material_requests->getAllMaterialRequest($pmid);
                $data3 = $quotations->getAllMaterialQ($pmid, 'Sent');
                $data4 = $quotations->getAllMaterialQ($pmid, 'Received');
            }
        } 
        else {
            $data2 = $material_requests->getAllMaterialRequest($pmid);
            $data3 = $quotations->getAllMaterialQ($pmid, 'Sent');
            $data4 = $quotations->getAllMaterialQ($pmid, 'Received');
        }

        $this->view('pmmaterial', [
            'rows' => $data,
            'rows2' => $data2,
            'rows3' => $data3,
            'rows4' => $data4,
        ]);
    }

    public function materialReceived($id = null)
    {
            if(!Auth::logged_in()){
                $this->redirect('staff_login');
            }
            $q_table = new QuotationSK();
            $q_table->materialReceived($id);
    }
}
