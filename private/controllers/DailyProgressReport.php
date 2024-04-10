<?php

    class DailyProgressReport extends Controller{
        
        public function index(){
            $project_id=1;
            $report= new ProgressReport();
            $date=date("Y-m-d");
            
            $data=$report->viewReport($project_id);
            $count=$report->viewReportCount($project_id,$date);
            $count=(int)$count[0]->count;
            var_dump($count);
            $this->view('ViewDPR',['rows'=> $data,'check'=>$count]);
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
                    'project_id'=>1,
                ];

                $reportData=new ProgressReport();
                $reportData->setTable('weather_report');
                $reportData->insert($weather);

                $work=[
                    'work_description'=>$_POST['description'],
                    'comment'=>$_POST['comment'],
                    'date'=>date("Y-m-d"),
                    'project_id'=>1,
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
                    'project_id'=>1,
                    
                    
                ];

                $reportData->setTable('challenge');
                $reportData->insert($challenge);

                $this->redirect('dailyprogressreport');

            }
            $this->view('UpdateDailyProgessReport');
        }

        public function viewReport($id=null){

            $project_id=1;

            $report= new ProgressReport();
            $data=$report->viewReportDetail($id,$project_id);
            $weather=$report->viewWeatherDetail($id,$project_id);
            $challenge=$report->viewChallengeDetail($id,$project_id);

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