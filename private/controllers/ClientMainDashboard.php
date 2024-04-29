<?php

    class ClientMainDashboard extends Controller{
        
        public function index($id){

            if (!Auth::logged_in()) {
                $this->redirect('/login');
            }

              $_SESSION['project_id'] = $id;

            // var_dump(Auth::getProjectId());

            $model= new Dashboards();
            $model_id=$model->getModel();
           
            $totalTask=$model->getTaskCount($model_id[0]->model_id);
            $completeTask=$model->getCompleteTaskCount();
            $ongoingTask=$model->getOngoingTaskCount();
            $pendingTask=(int)$totalTask[0]->total-(int)$completeTask[0]->completeCount-(int)$ongoingTask[0]->ongoingCount;

            $paid=$model->getPaidAmount();
            $unpaid=$model->getNotPaidAmount();

            $completeComplaint=$model->getCompleteComplaintCount();
            $pendingComplaint=$model->getPendingComplaintCount();

            $pendingComplaintDetail=$model->getPendingComplaint();

            $ratings= new Rating();
            $avgRate=$ratings->avgRate();
            $count=$ratings->getCount();

            $payment=$model->getPayment();

            $this->view('ClientMainDashboard',[
                'rows'=>$totalTask, 'complete'=>$completeTask, 'ongoing'=>$ongoingTask, 'pending'=>$pendingTask,
                'paid'=>$paid,'unpaid'=>$unpaid,'completeComplaint'=>$completeComplaint,'pendingComplaint'=>$pendingComplaint,
                'complaints'=>$pendingComplaintDetail, 'averageRate'=>$avgRate,'count'=>$count, 'payments'=>$payment
            ]);
        }


    }
?>