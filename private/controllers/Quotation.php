<?php

    //Quotation controller
    class Quotation extends Controller{
        
        public function index($id){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }

            $quotation= new Project_Quotation();
            $data=$quotation->getQuotation($id);
            $_SESSION['project_id']=$id;

            $payment= new Project_Quotation();
            $detail=$payment->getPaymentDetail($id);
            $status=$detail[0]->status;

            var_dump($status);

            // var_dump("AUTH ID",Auth::id());

            $this->view('ViewQuotation',["rows"=>$data,"status"=>$status]);
        }

        public function reject(){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }
            
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

                $quotation=new Project_Quotation();
                $quotation->rejectQuotation();

                $project=new Projects();
                $request=$project->where("id",Auth::getProjectId());
                $request_id=$request[0]->project_request_id;

                $quotation->rejectRequest($request_id);

                $quotation->rejectProject();

                $this->redirect('clientdashboard');
            }

            $this->view('RejectedQuotation');
        }

    }
?>