<?php

class Pmdailyreports extends Controller{
    
    public function index(){
        $pmi = Auth::getId();
        $report= new ProgressReport();
        
        $data=$report->viewAllReport($pmi);
        
        $this->view('pmdailyreportsv',['rows'=> $data]);
    }

    public function viewDPR($id=null, $date=null){

        $report= new ProgressReport();
        $data=$report->viewDPRDetail($id, $date);
        

        $weather=$report->viewDPRWeatherDetail($id, $date);
        
        $challenge=$report->viewDPRChallengeDetail($id, $date);

        $this->view('pmdailyreports',['rows'=> $data,'weatherDetail'=>$weather,'challengeDetail'=>$challenge]);
    }

}
?>