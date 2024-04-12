
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