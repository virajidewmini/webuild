<?php

    class Payment extends Controller{
        
        public function index(){

            if(isset($_GET['order_id'])) {
                
                $order_id = $_GET['order_id'];
                $model=new Payments();
                $model->updateStatus($order_id); 
                
            }
            $this->view('Success');
        }

        public function fail(){
            $this->view('Fail');
        }



    }
?>



