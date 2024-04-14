<?php 
class Payments extends Model{

    protected $table="payments";

    protected $afterSelect = [
        'get_user',
    ];

    public function getNearingPayments(){


        $query="SELECT payments.* , projects.user_id
        FROM payments INNER JOIN projects
        ON payments.project_id = projects.id
        WHERE payments.date <= DATE_ADD(CURDATE(), INTERVAL 2 WEEK)
        AND payments.date >= CURDATE() AND payments.status='Unpaid' "; 

       
        return $this->query($query);
    }


    public function get_user($data){

        $user = new Users();
        foreach ($data as $key => $row){
            
            $result = $user->where('id',$row->user_id);
            $data[$key]->user = is_array($result) ? $result[0] : false ;
            
        }
    
        return $data;
    }

}
?>