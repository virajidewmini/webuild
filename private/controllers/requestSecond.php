<?php 
    class requestSecond extends Controller{
      public function index() {
        $requestSecondModel = new RequestsSecond();
        $data = $requestSecondModel->findAll();
        if ($data) {
            $this->view('storekeeperRequestSecond', ['rows' => $data]);
        } else {
            echo "No data found.";
        }
    }

    public function add() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quotationSKModel = new QuotationSK();
            $quotationSKModel->insert($_POST);
            $this->redirect('quotationorder');
        }
        $requestSecondModel = new RequestsSecond();
        $data = $requestSecondModel->findAll();
        $this->view('storekeeperRequestQuotation', ['rows' => $data]);
    }
      


    // public function viewDetails($request_id = null) {
    //     // Check if request ID is provided
    //     if ($request_id !== null) {
    //         // Instantiate the RequestsSecond model
    //         $requestSecond = new RequestsSecond();
            
    //         // Fetch data from the material_requests table based on request_id
    //         // $data = $requestSecond->findAll(['conditions' => ['request_id' => $request_id]]);
    //         $data = $requestSecond->where('request_id',$request_id);
    //         // Pass the filtered data to the view
    //         $this->view('storekeeperRequestQuotation', ['rows' => $data]);
    //     }
    // }
    }
?>
