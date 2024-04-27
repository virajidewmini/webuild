<?php

//Manager materials controller
class Pmmodification extends Controller
{


    public function index($uid = null, $id = null, $mid = null, $price = null, $interest = null, $model_id  = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('/login');
        }
        // $pmi = Auth::getId();

        $kitchen = new Kitchen();
        $bathroom = new Bathroom();
        $living = new Living();
        $bedroom = new Bedroom();
        $dining = new Dining();
        $exterior = new Exterior();
        $model = new Models(); 

        $project_request = new Project_requests();
        $quotation = new Project_Quotation();
        $project = new Projects();

        $data1 = $kitchen->where('modification_id', $mid);
        $data2 = $bathroom->where('modification_id', $mid);
        $data3 = $living->where('modification_id', $mid);
        $data4 = $bedroom->where('modification_id', $mid);
        $data5 = $dining->where('modification_id', $mid);
        $data6 = $exterior->where('modification_id', $mid);

        $data7 = $kitchen->where('modification_id', 'default');
        $data8 = $bathroom->where('modification_id', 'default');
        $data9 = $living->where('modification_id', 'default');
        $data10 = $bedroom->where('modification_id', 'default');
        $data11 = $dining->where('modification_id', 'default');
        $data12 = $exterior->where('modification_id', 'default');
        $data13 = $model->where('id',$model_id);
        $data14 = $project_request->where('id',$id);


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($project_request->validate($_POST)&&$quotation->validate($_POST)&&$project->validate($_POST)) {

                
                $arr1['manager_id'] = $_POST['manager_id'];
                $arr1['project_request_id'] = $id;
                $arr1['status'] = 'Pending';
                $arr1['user_id'] = $_POST['user_id'];
                $arr1['modification_id'] = $_POST['modification_id'];
                $arr1['model_id'] = $_POST['model_id'];
                $arr1['payment_package_id'] = $_POST['payment_package_id'];
                $project->insert($arr1);
                // $arr['total_amount'] = $_POST['totalprice'];
                // $arr['user_id'] = $uid;
                // $arr['request_id'] = $id;
                // $arr['status'] = 'Display';
                // $arr['created_date'] = date("Y-m-d");
                // $quotation->insert($arr);
                // $quotation->InsertQuotationData($_POST);

                
            
                $arr2['status'] = 'Done';
                $project_request->update($id, $arr2);

                $this->redirect('pmdashboard');
            }
        }




        $this->view('pmmodification', [
            'price' => $price,
            'interest' => $interest,

            'rowk' => $data1,
            'rowba' => $data2,
            'rowl' => $data3,
            'rowbe' => $data4,
            'rowd' => $data5,
            'rowe' => $data6,

            'drowk' => $data7,
            'drowba' => $data8,
            'drowl' => $data9,
            'drowbe' => $data10,
            'drowd' => $data11,
            'drowe' => $data12,
            'model'=> $data13,
            'rows'=> $data14,
        ]);
    }
}
