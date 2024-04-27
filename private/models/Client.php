<?php 
class Client extends Model{
    protected $table = "project_requests";
    public function getProject($client_id){

        $query = "select id from projects where user_id = :user_id && (status= 'Ongoing' OR status = 'Complete' OR status='Pending')";
		$params = [
            'user_id' => $client_id,
            
        ];
        return $this->query($query,$params);
    }

    public function getProjectRequest($client_id){

        $query = "select id from project_requests where user_id = :user_id && status != 'Paid'";
		$params = [
            'user_id' => $client_id,
            
        ];
        return $this->query($query,$params);
    }
    
    public function getStatus($project_id){

        $query = "select status from projects where id = :project_id";
        $params = [
            'project_id' => $project_id,
            
        ];
        return $this->query($query,$params);
    }

    public function getProjectId(){

        $query = "select id from projects where user_id = :user_id";
		$params = [
            'user_id' => Auth::id(),
            
        ];
        return $this->query($query,$params);
    }
}
?>