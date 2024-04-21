<?php

    class Rate extends Controller{
        
        public function index(){
            $ratings= new Rating();
            if (count($_POST) >0) {

                $rate=[
                    'user_id'=>Auth::id(),
                    'project_id'=>Auth::getProjectId(),
                    'rate'=>intval($_POST["rate"]),
                    'review'=>$_POST['review'],
                ];

                $ratings->insert($rate);
                
            }
            
            $data=$ratings->getRating();
            $rateCount=$ratings->getStarRating();
            $avgRate=$ratings->avgRate();
            $count=$ratings->getCount();
            

            $this->view('RateAndReview',['rows'=>$data,'rate'=>$rateCount, 'averageRate'=>$avgRate,'count'=>$count]);
        }

    }
?>