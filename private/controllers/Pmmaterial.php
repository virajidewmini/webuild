<?php

//Manager materials controller
class Pmmaterial extends Controller
{

    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
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

    public function materialRequest_view($request_id = null)
    {
            if(!Auth::logged_in()){
                $this->redirect('login');
            }
            $material_req= new Material_requests();

            $row = $material_req->getReqDetails($request_id);


            $this->view('pmmaterial_r_details',[
                'rows'=>$row,
            ]);
    }
    public function materialReceive_view($quotation_id = null, $project_id = null, $level = null )
    {
            if(!Auth::logged_in()){
                $this->redirect('login');
            }
            $material_quo= new QuotationSK();

            $row = $material_quo->getReceiveReqDetails($quotation_id);


            $this->view('pmmaterial_q_details',[
                'rows'=>$row,
                'project_id'=>$project_id,
                'level'=>$level,
            ]);
    }

    public function materialReceived_view($quotation_id = null, $project_id = null, $level = null )
    {
            if(!Auth::logged_in()){
                $this->redirect('login');
            }
            $material_quo= new QuotationSK();

            $row = $material_quo->getReceiveReqDetails($quotation_id);


            $this->view('pmmaterial_received_details',[
                'rows'=>$row,
                'project_id'=>$project_id,
                'level'=>$level,
            ]);
    }
    public function materialReceived($id = null)
    {
            if(!Auth::logged_in()){
                $this->redirect('staff_login');
            }
            $q_table = new QuotationSK();
            $q_table->materialReceived($id);

            echo '<script>window.history.go(-1);</script>';
    }
}
