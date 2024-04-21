<?php 
    class QuotationOrder extends Controller{
        public function index(){
            
                //$db = new Database();
                $quotationorder=new QuotationSK();

                $data = $quotationorder->getquatation();

// Check if there is a search query
$filter = isset($_GET['filter']) ? $_GET['filter'] : null;

// If a filter is applied, filter the data by p_id
if ($filter !== null) {
    // Perform filtering based on p_id
    $filteredData = array_filter($data, function($row) use ($filter) {
        return stripos($row->p_id, $filter) !== false;
    });

    $data = $filteredData;
}

                $this->view('quatationSendAfter1',['rows'=> $data]);

        }

        public function quotationviewDetails($id = null)
    {
        // Check if request ID is provided
        if ($id !== null) {
            // Instantiate the RequestsSecond model
            $requestSecond = new QuotationSK();

            // Fetch data from the material_requests table based on request_id
            // $data = $requestSecond->findAll(['conditions' => ['request_id' => $id]]);
            $data = $requestSecond->getquatationDetails($id);
            // Pass the filtered data to the view
            $this->view('quOtationSendAfter2', ['rows' => $data, 'r_id' => $id]);
        }
    }

 

        public function add(){
            if(count($_POST) > 0){
                $quotationorder=new QuotationSK();
                $quotationorder->insert($_POST);
                $this->redirect('quotationorder');
            }

            $this->view('storekeeperRequestQuotation');
        }


        
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $quotationorder=new QuotationSK();
                $quotationorder->delete($id);
                $this->redirect('quotationorder');

            }
            $this->view('storekeeperDeleteQuotation');
        }
        
        public function update($id=null){
           
            if(count($_POST) > 0){
                $quotationorder=new QuotationSK();
                $quotationorder->update($id,$_POST);
                $this->redirect('quotationorder');

            }
            $this->view('storekeeperUpdateQuotation');
        }
       
        
    }
?>