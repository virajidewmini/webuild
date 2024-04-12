<?php

class Pmdailyreports extends Controller{
    
    public function index(){

        $report= new ProgressReport();
        $data= $report->findAll();
        $this->view('pmdpr_view',['rows'=> $data]);
    }

   

    public function viewReport($id=null){

        $report= new ProgressReport();
        $data=$report->viewReportDetail($id);
        $weather=$report->viewWeatherDetail($id);
        $challenge=$report->viewChallengeDetail($id);

        $this->view('ViewDailyProgressReport',['rows'=> $data,'weatherDetail'=>$weather,'challengeDetail'=>$challenge]);
    }

}
?>