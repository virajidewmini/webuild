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

    public function getWarningPayments(){


        $query="SELECT payments.* , projects.user_id
        FROM payments INNER JOIN projects
        ON payments.project_id = projects.id
        WHERE payments.date <= DATE_ADD(CURDATE(), INTERVAL 1 WEEK)
        AND payments.date >= CURDATE() AND payments.status='Unpaid' "; 

       
        return $this->query($query);
    }


    public function get_user($data){

        $user = new Users();
        foreach ($data as $key => $row){
            if(property_exists($row,"user_id")){
                $result = $user->where('id',$row->user_id);
                $data[$key]->user = is_array($result) ? $result[0] : false ;
            }
        }
    
        return $data;
    }

    public function updateStatus($order_id){

        $query = "update payments set status='Paid' where id=:order_id";
		$params = [
            'order_id' => $order_id,
           
        ];
        return $this->query($query,$params);
    }

    public function getDetails($project_id){

        $query = "select * from payments where project_id=:project_id";
		$params = [
            'project_id' => $project_id,
           
        ];
        return $this->query($query,$params);
    }

    public function getInstallmentDetail($id){

        $query = "select * from payments where id= :id ";
		$params = [
            'id'=>$id,
           
        ];
        return $this->query($query,$params);
    }

    public function getAllInstallments($value){


        $query="SELECT * 
        FROM payments 
        WHERE project_id =:value 
        ORDER BY date ASC"; 

       
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function getPaymentPlan($value){


        $query="SELECT * 
        FROM payment_packages 
        WHERE id =:value"; 

       
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    
    public function getPaymentPlanInstallments($value){


        $query="SELECT * 
        FROM installements 
        WHERE payment_plan_id =:value"; 

       
        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function getRemainingUnpaidTotal($value){


        $query="SELECT SUM(amount) AS total_amount
        FROM payments 
        WHERE project_id = :value 
        AND (status='Unpaid' OR status='Notified')
        
        "; 

       
        return $this->query($query, [
            'value' => $value,
        ]);
    }



    
}
?>