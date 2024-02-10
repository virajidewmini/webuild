<?php 
    class QuotationOrder extends Controller{
        public function index(){
            
                //$db = new Database();
                $quotationorder=new QuotationSK();

                // $data = $db->query("select * from miantain");
                $data= $quotationorder->findAll();
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                //$mainTain->insert($arr);

                usort($data, function($a, $b) {
                    if ($a->decision == 'REJECT' && $b->decision != 'REJECT') {
                        return 1; // Move "REJECT" row to the bottom
                    } elseif ($a->decision != 'REJECT' && $b->decision == 'REJECT') {
                        return -1; // Keep "REJECT" row at the top
                    } else {
                        return 0; // Preserve original order for other rows
                    }
                });
                
                // $maintain->update(3,$arr);
                // $maintain->delete(4);
                // $data=$maintain->findAll();
                $this->view('quotationSendAfter',['rows'=> $data]);
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