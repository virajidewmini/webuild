
<?php 
class ProgressReport extends Model{
    protected $table = "daily_progress_report";

    public function setTable($table) {
        $this->table = $table;
    }

   
    public function viewReport($project_id){

        $query = "select * from daily_progress_report where project_id= :project_id";
		$params = [
            'project_id' => $project_id
        ];
        return $this->query($query,$params);
    }

    public function viewReportCount($project_id,$date){
       
        $query = "select COUNT(id) as count from daily_progress_report where date = :date && project_id= :project_id;";
		$params = [
            'project_id' => $project_id,
            'date'=>$date,
        ];
        return $this->query($query,$params);
    }
    public function viewReportDetail($id,$project_id){

        $query = "select * from daily_progress_report where date = :id && project_id= :project_id";
		$params = [
            'id' => $id,
            'project_id' => $project_id
        ];
        return $this->query($query,$params);
    }

    public function viewWeatherDetail($id,$project_id){

        $query = "select * from weather_report where date = :id && project_id= :project_id";
		$params = [
            'id' => $id,
            'project_id' => $project_id
        ];
        return $this->query($query,$params);
    }

    public function viewChallengeDetail($id,$project_id){

        $query = "select * from challenge where date = :id && project_id= :project_id";
		$params = [
            'id' => $id,
            'project_id' => $project_id
        ];
        return $this->query($query,$params);
    }

    public function deleteReport($id){

        $query = "delete from daily_progress_report where date = :id";
		$data['id'] = $id;
        $this->query($query,$data);

        $query2 = "delete from weather_report where date = :id";
        $this->query($query2, $data);

        $query3 = "delete from challenge where date = :id";
        $this->query($query3, $data);
    }

    
}
?>