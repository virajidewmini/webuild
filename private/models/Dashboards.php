<?php 
class Dashboards extends Model{
    public function getModel(){
        $query="Select model_id from projects where id=:project_id";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getTaskCount($model_id){
        $query="SELECT COUNT(tasks.id) as total FROM `tasks` where module_id=:model_id";
        $param=[
            'model_id'=>$model_id
        ];
        return($this->query($query,$param));
    }

    public function getCompleteTaskCount(){
        $query="SELECT COUNT(id) as completeCount FROM `allocated_task` WHERE project_id=:project_id && status='Complete'";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getOngoingTaskCount(){
        $query="SELECT COUNT(id) as ongoingCount FROM `allocated_task` WHERE project_id=:project_id && status='Ongoing'";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getPaidAmount(){
        $query="SELECT SUM(amount)as paidAmount FROM `payments` WHERE project_id=:project_id && status='Paid' ";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getNotPaidAmount(){
        $query="SELECT SUM(amount)as notPaidAmount FROM `payments` WHERE project_id=:project_id && status='Unpaid' ";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getCompleteComplaintCount(){
        $query="SELECT COUNT(id) as completeComplaintCount FROM `complaint` WHERE project_id=:project_id && status='Complete'";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }
    
    public function getPendingComplaintCount(){
        $query="SELECT COUNT(id) as pendingComplaintCount FROM `complaint` WHERE project_id=:project_id && status='Pending'";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getPendingComplaint(){
        $query="SELECT type,date FROM `complaint` WHERE project_id=:project_id && status='Pending'";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getPayment(){
        $query="SELECT installement_number,amount,date FROM `payments` WHERE project_id=:project_id && status='Unpaid'";
        $param=[
            'project_id'=>Auth::getProjectId()
        ];
        return($this->query($query,$param));
    }

    public function getCoworkerCount(){
        $query="SELECT role, COUNT(*) AS row_count FROM coworker GROUP BY role;'";
        return($this->query($query));
    }
    
}
?>