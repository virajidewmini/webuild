
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

    public function viewDPRChallengeDetail($project_id, $date){

        $query = "SELECT * FROM challenge WHERE date = :date AND project_id = :project_id";
		$data['project_id'] = $project_id;
		$data['date'] = $date;
        return $this->query($query,$data);
    }

    
}
?>