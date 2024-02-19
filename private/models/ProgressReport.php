
<?php 
class ProgressReport extends Model{
    protected $table = "daily_progress_report";

    public function setTable($table) {
        $this->table = $table;
    }

    public function viewReportDetail($id){

        $query = "select * from daily_progress_report where date = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
    }

    public function viewWeatherDetail($id){

        $query = "select * from weather_report where date = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
    }

    public function viewChallengeDetail($id){

        $query = "select * from challenge where date = :id";
		$data['id'] = $id;
        return $this->query($query,$data);
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