<?php

    class SupMainDashboard extends Controller{
        
        public function index($id){

            if (!Auth::logged_in()) {
                $this->redirect('/staff_login');
            }

            $_SESSION['project_id'] = $id;

            $model= new Dashboards();
            $model_id=$model->getModel();
           
            $totalTask=$model->getTaskCount($model_id[0]->model_id);
            $completeTask=$model->getCompleteTaskCount();
            $ongoingTask=$model->getOngoingTaskCount();
            $pendingTask=(int)$totalTask[0]->total-(int)$completeTask[0]->completeCount-(int)$ongoingTask[0]->ongoingCount;

            $coworker=$model->getCoworkerCount();


            $notification=new Notifications();

            $pendingComplaint=$notification->getSupervisorUnresolveComplaintCount(Auth::id());
            $completeComplaint=$notification->getSupervisorresolveComplaintCount(Auth::id());


            $pendingComplaintDetail=$notification->getSupervisorUnresolveComplaint(Auth::id());

            $report=new ProgressReport();
            $reportDetail=$report->viewReportDay();

            $payment=$model->getPayment();

            $this->view('SupMainDashboard',[
                'rows'=>$totalTask, 'complete'=>$completeTask, 'ongoing'=>$ongoingTask, 'pending'=>$pendingTask,
                'completeComplaint'=>$completeComplaint,'pendingComplaint'=>$pendingComplaint,'complaints'=>$pendingComplaintDetail, 
                'coworkers'=>$coworker, 'report'=>$reportDetail
                 
            ]);
        }

    }
?>