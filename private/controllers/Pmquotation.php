<?php
class Pmquotation extends Controller
{


    public function index($request_id = null, $price = null)
    {
        $quotation = new Project_Quotation();
        $project = new Projects();
        $project_request = new Project_requests();
        $model = new UploadModel();

        $data14 = $project_request->where('id', $request_id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($quotation->validate($_POST) && $project->validate($_POST)) {

                $arr1['manager_id'] = $_POST['manager_id'];
                $arr1['project_request_id'] = $request_id;
                $arr1['status'] = 'Pending';
                $arr1['user_id'] = $_POST['user_id'];
                $arr1['modification_id'] = $_POST['modification_id'];
                $arr1['model_id'] = $_POST['model_id'];
                $arr1['payment_package_id'] = $_POST['payment_package_id'];
                $project->insert($arr1);

                
                $uploadedFiles = $model->uploadQuotation($_FILES['files']);
                $quotation_data = $quotation->InsertQuotationData($_POST, $uploadedFiles);

                $quotation->insert($quotation_data);

                $arr2['status'] = 'Done';
                $project_request->update($request_id, $arr2);

                $this->redirect('pmdashboard');
            }
        }




        $this->view('pmaddquotation', [
            'price' => $price,
            'request_id' => $request_id,
            'rows' => $data14,
        ]);
    }
}
