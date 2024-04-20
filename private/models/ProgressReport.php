
<?php 
class ProgressReport extends Model{
    protected $table = "daily_progress_report";

    public function setTable($table) {
        $this->table = $table;
    }


    public function viewALLReport($id){

        $query = "SELECT daily_progress_report.* FROM projects JOIN daily_progress_report ON projects.id = daily_progress_report.project_id WHERE manager_id = :id ORDER BY daily_progress_report.date DESC";
		$params = [
            'id' => $id
      ];
        return $this->query($query,$params);
    }

   
    public function viewReport($project_id){

        $query = "select * from daily_progress_report where project_id= :project_id";
		$params = [
            'project_id' => $project_id

        ];
        return $this->query($query,$params);
    }



    public function viewDPRDetail($project_id, $date){

        $query = "SELECT * FROM daily_progress_report WHERE date = :date AND project_id = :project_id";
        $data['project_id'] = $project_id;
		$data['date'] = $date;
        return $this->query($query,$data);
    }

    public function viewDPRWeatherDetail($project_id, $date){
        $query = "SELECT * FROM weather_report WHERE date = :date AND project_id = :project_id";
		$data['project_id'] = $project_id;
		$data['date'] = $date;
        return $this->query($query,$data);
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

    public function viewReportDay(){

        $query = "select * from daily_progress_report where date = :id && project_id= :project_id";
		$params = [
            'id' => date('Y-m-d'),
            'project_id' => Auth::getProjectId(),
        ];
        return $this->query($query,$params);
    }

    public function updateReportDetail($id,$project_id,$description,$comment){

        $query = "update daily_progress_report set work_description=:description, comment=:comment where date = :id && project_id= :project_id";
		$params = [
            'id' => $id,
            'project_id' => $project_id,
            'description'=>$description,
            'comment'=>$comment,
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

    public function updateWeatherDetail($id,$project_id){

        $query = "update weather_report set hour_8=:h8,hour_9=:h9,hour_10=:h10,hour_11=:h11,hour_1=:h1,hour_2=:h2,hour_3=:h3,hour_4=:h4,temperature=:temp,Overall=:Overall where date = :id && project_id= :project_id";
		$params = [
            'id' => $id,
            'project_id' => $project_id,
            'h8'
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

    public function viewDPRChallengeDetail($project_id, $date){

        $query = "SELECT * FROM challenge WHERE date = :date AND project_id = :project_id";
		$data['project_id'] = $project_id;
		$data['date'] = $date;
        return $this->query($query,$data);
    }

    
}
?>