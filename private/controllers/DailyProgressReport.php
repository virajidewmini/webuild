<?php

    class DailyProgressReport extends Controller{
        
        public function index(){
            $project_id=Auth::getProjectId();
            $report= new ProgressReport();
            $date=date("Y-m-d");
            
            $data=$report->viewReport($project_id);
           
            $count=$report->viewReportCount($project_id,$date);
            $count=(int)$count[0]->count;
            
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
                    'project_id'=>Auth::getProjectId(),
                ];

                $reportData=new ProgressReport();
                $reportData->setTable('weather_report');
                $reportData->insert($weather);

                $work=[
                    
                    'work_description'=>$_POST['description'],
                    'comment'=>$_POST['comment'],
                    'date'=>date("Y-m-d"),
                    'project_id'=>Auth::getProjectId(),
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
                    'project_id'=>Auth::getProjectId(),
                    
                    
                ];

                $reportData->setTable('challenge');
                $reportData->insert($challenge);

                $this->redirect('dailyprogressreport');

            }
            $this->view('UpdateDailyProgessReport');
        }

        public function viewReport($id=null){

            $project_id=Auth::getProjectId();

            $report= new ProgressReport();
            $data=$report->viewReportDetail($id,$project_id);
            

            $weather=$report->viewWeatherDetail($id,$project_id);
            
            $challenge=$report->viewChallengeDetail($id,$project_id);

            $this->view('ViewDailyProgressReport',['rows'=> $data,'weatherDetail'=>$weather,'challengeDetail'=>$challenge]);
        }

        public function updateReport($id=null){

            $report=new ProgressReport();
            $project_id=Auth::getProjectId();
            $data=$report->viewReportDetail($id,$project_id);
            $weather=$report->viewWeatherDetail($id,$project_id);
            $challenge=$report->viewChallengeDetail($id,$project_id);
            if($data){
                $data=$data[0];
            }
            if($weather){
                $weather=$weather[0];
            }
            if($challenge){
                $challenge=$challenge[0];
            }

            if(count($_POST) > 0){

                $report=new ProgressReport();
                var_dump($_POST);
                $report->updateReportDetail($id,$project_id,$_POST["description"],$_POST['comment']);
			    // $report->update($id,$_POST);

                //   $this->redirect('allcoworkers');
            }
            $this->view('UpdateDailyProgress',['rows'=>$data,'weatherDetail'=>$weather,'challengeDetail'=>$challenge]);
        }

        public function delete($id=null){
           
            if(count($_POST) > 0){
                $report=new ProgressReport();
			    $report->deleteReport($id);
                $this->redirect('dailyprogressreport');

            }
            $this->view('DeleteComplaint');
        }

    }
?>