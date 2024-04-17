<?php 
class Client extends Model{
    
    public function getProject($client_id){

        $query = "select id from projects where user_id = :user_id && status= 'Ongoing'";
		$params = [
            'user_id' => $client_id,
            
        ];
        return $this->query($query,$params);
    }
    
}
?>