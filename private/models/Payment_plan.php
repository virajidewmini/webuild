<?php 
class Payment_plan extends Model{

    protected $table="payment_packages";

    

    public function findPaymentPlan($value){


        $query="SELECT *
        FROM payment_packages 
        WHERE id=:value "; 
        
        return $this->query($query, [
            'value' => $value,
        ]);

    }


    

}
?>