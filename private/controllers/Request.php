<?php
class Request extends Controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('staff_login');
        }

       
        $request = new Requests();

        $data = $request->getRequest();


        // Check if there is a search query
        $filter = isset($_GET['filter']) ? $_GET['filter'] : null;

        // If a filter is applied, filter the data by project_id
        if ($filter !== null) {
            // Perform filtering based on project_id
            $filteredData = array_filter($data, function ($row) use ($filter) {
                return stripos($row->project_id, $filter) !== false;
            });

            $data = $filteredData;
        }

       

        $this->view('storekeeperrequest', ['rows' => $data]);
    }

    

    public function viewDetails($id = null)
    {
        // Check if request ID is provided
        if ($id !== null) {
            // Instantiate the RequestsSecond model
            $requestSecond = new Requests();

            // Fetch data from the material_requests table based on request_id
            // $data = $requestSecond->findAll(['conditions' => ['request_id' => $id]]);
            $data = $requestSecond->getRequestDetails($id);
            // Pass the filtered data to the view
            $this->view('storekeeperRequestSecond', ['rows' => $data, 'r_id' => $id]);
        }
    }
    public function add($id = null, $district = null)
    {
        $errors = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quotationSKModel = new QuotationSK();
            if ($quotationSKModel->quatation_validate($_POST)) {
                $quotation_id = $quotationSKModel->insertMaterialquatation($_POST);

                $data1 = $quotationSKModel->getM_deatails($quotation_id);

                $quotationSKModel->updateM_deatails($data1);

                $this->redirect('quotationorder');
            }
            else{
                $errors = $quotationSKModel -> errors;
            }
        }

        // Fetch the same data as in the index method
        $requestSecondModel = new Requests();
        $data = $requestSecondModel->toQuotation($id);

        // Pass the data to the second view
        $this->view('storekeeperRequestQuotation', ['rows' => $data, 'r_id' => $id, 'district' => $district, 'errors' => $errors]);
    }

    
}
