<?php

    //Quotation controller
    class Quotation extends Controller{
        
        public function index(){

            $quotation= new Project_Quotation();
            $data=$quotation->getQuotation();
            // var_dump("AUTH ID",Auth::id());

            $this->view('ViewQuotation',["rows"=>$data]);
        }

        public function reject(){
            if(count($_POST) > 0){

                $reject= new Reject();

                $reasonsJson = json_encode($_POST['reasons']);

                $ratings = [
                    'rate_1' => $_POST['rate'],
                    'rate_2' => $_POST['rate_2'],
                    'rate_3' => $_POST['rate_3'],
                    'rate_4' => $_POST['rate_4'],
                ];

                $rating = json_encode($ratings);

                $reject_quotation=[
                    "reason"=>$reasonsJson,
                    "description"=>$_POST['description'] ,
                    "rating"=>$rating,
                    "comment"=>$_POST['comment'] ,
                    // "new_quotation"=>isset($_POST['otherQuotation'])?"True" : "False"
                ];
                
			    $reject->insert($reject_quotation);

                $this->redirect('quotation');
            }

            $this->view('RejectedQuotation');
        }

    }
?>