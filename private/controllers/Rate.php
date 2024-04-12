<?php

    class Rate extends Controller{
        
        public function index(){
            $ratings= new Rating();
            if (count($_POST) >0) {

                $rate=[
                    'user_id'=>1,
                    'rate'=>intval($_POST["rate"]),
                    'review'=>$_POST['review'],
                ];

                $ratings->insert($rate);
                
            }
            $data=$ratings->findAll();

            $this->view('RateAndReview',['rows'=>$data]);
        }

    }
?>