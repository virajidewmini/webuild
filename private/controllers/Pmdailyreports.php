<?php

class Pmdailyreports extends Controller{
    
    public function index(){
        $pmi = Auth::getId();
        $report= new ProgressReport();
        $projects = new Projects();
        $data = $projects->where2('status', 'Ongoing', 'manager_id', $pmi);
        
        

        if (isset($_GET['project_id'])) {
            if ($_GET['project_id']) {
                $project_id = $_GET['project_id'];
                $data1 = $report->viewReport($project_id);
            }
            else {
                $data1=$report->viewAllReport($pmi);
            }
        } 
        else {
            $data1=$report->viewAllReport($pmi);
        }
        
        $this->view('pmdailyreportsv',[
            'rows'=> $data,
            'rows1'=> $data1,
        ]);
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