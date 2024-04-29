<?php
class Pmcomplaint extends Controller
{


    public function index()
    {
        $pmid = Auth::getId();
        $complaint = new C_Complaint();
        $data = $complaint->man_viewComplanit_noty($pmid);




        $this->view('pmcomplaint', [
            'rows' => $data,
        ]);
    }

    public function man_view_complaint($id = null , $star = null)
    {

        $complaint = new C_Complaint();
        $data = $complaint->where('id', $id);
        $notification = new Notifications();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($complaint->validate($_POST)) {

                $_POST['status'] = 'Complete';
                $complaint->update($id, $_POST);

                $data = $notification->complainttocoo($id);
                $notification->insert($data);
                echo '<script>window.history.go(-1);</script>';

                
            }
        }




        $this->view('pmcomplaint_handle', [
            'rows' => $data,
        ]);
    }
}
