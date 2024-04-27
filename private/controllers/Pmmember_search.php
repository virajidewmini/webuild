<?php

//Manager members controller
class Pmmember_search extends Controller
{


    public function index($district = null, $p_id = null, $q_id = null, $months = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('/login');
        }

        $staff = new Staffs();

        if (isset($_GET['district'])) {
            $district = $_GET['district'];
            $data = $staff->findSupervisor($district);
        } elseif (isset($district)) {
            $data = $staff->findSupervisor($district);
        } 
        else {
            $data = $staff->findAllSupervisor();
        }

        $this->view('pmmember_search', [
            'rows1' => $data,
            'p_id' => $p_id,
            'q_id' => $q_id,
            'months' => $months,

        ]);
    }

    public function add_sup($uid = null, $fname = null, $lname = null, $p_id = null, $q_id = null, $months = null)
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $project = new Projects();
        $quotation = new Project_Quotation();
        $row = $project->where('id', $p_id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($project->validate($_POST)) {

                $_POST['status'] = 'Ongoing';
                $p_id = $_POST['id'];
                $project->update($p_id, $_POST);
                $arr1['status'] = 'Paid';
                $quotation->update($q_id, $arr1);

                $this->redirect('pmdashboard');
            }
        }




        $this->view('pmmember_add', [
            'rows' => $row,
            'months' => $months,
            'uid' => $uid,
            'q_id' => $q_id,
            'fname' => $fname,
            'lname' => $lname,
        ]);
    }

    public function view_sup($uid = null)
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $staff = new staffs();
        $row = $staff->where('id', $uid);





        $this->view('pmmember_detail', [
            'row' => $row,
        ]);
    }
}
