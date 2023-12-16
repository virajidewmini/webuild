<?php 
class Staffs extends Model{

    protected $table = "staff";


 public function validate($DATA){

        $this->errors = array();


        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }
    
}
?>

