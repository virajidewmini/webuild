<?php

class Pmdailyreports extends Controller{
    
    public function index(){

        $report= new ProgressReport();
        $data= $report->findAll();
        $this->view('ViewDPR',['rows'=> $data]);
    }

    public function add(){

        if (count($_POST) >0) {
            
            $weather=[
                
                'hour_8'=>$_POST['h8'],
                'hour_9'=>$_POST['h9'],
                'hour_10'=>$_POST['h10'],
                'hour_11'=>$_POST['h11'],
                'hour_1'=>$_POST['h1'],
                'hour_2'=>$_POST['h2'],
                'hour_3'=>$_POST['h3'],
                'hour_4'=>$_POST['h4'],

                'temperature'=>$_POST['temp'],
                'overall'=>$_POST['overall'],
                'date'=>date("Y-m-d"),
            ];

            $reportData=new ProgressReport();
            $reportData->setTable('weather_report');
            $reportData->insert($weather);

            $work=[
                'work_description'=>$_POST['description'],
                'comment'=>$_POST['comment'],
                'date'=>date("Y-m-d"),
            ];

    
            $reportData->setTable('daily_progress_report');
            $reportData->insert($work);

            $challenge=[
                'date'=>date("Y-m-d"),
                'challenge'=>$_POST['nature'],
                'description'=>$_POST['challenge_description'],
                'impact'=>$_POST['impact'],
                'root_case'=>$_POST['root_case'],
                'face_it'=>$_POST['face'],

                // 'date'=>'2022-02-25',
                // 'challenge'=>'qwert',
                // 'description'=>'whebwjdndj',
                // 'impact'=>'wffgfgff',
                // 'root_case'=>'hf sjmcd',
                // 'face_it'=>'wufnddjfn',
                
            ];

            $reportData->setTable('challenge');
            $reportData->insert($challenge);

        }
        $this->view('UpdateDailyProgessReport');
    }

    public function viewReport($id=null){

        $report= new ProgressReport();
        $data=$report->viewReportDetail($id);
        $weather=$report->viewWeatherDetail($id);
        $challenge=$report->viewChallengeDetail($id);

        $this->view('ViewDailyProgressReport',['rows'=> $data,'weatherDetail'=>$weather,'challengeDetail'=>$challenge]);
    }

    public function delete($id=null){
       
        if(count($_POST) > 0){
            $clientComplaint=new ProgressReport();
            $clientComplaint->deleteReport($id);
            $this->redirect('dailyprogressreport');

        }
        $this->view('DeleteComplaint');
    }

}
?>