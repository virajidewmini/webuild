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
      
   

    
    }
?>
