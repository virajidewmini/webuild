<?php 
class User_land extends Model{
    protected $table = "user_lands";
    
    public function validate($DATA){
        $this->errors = array();
        if(count($this->errors) == 0){
            return true;
        }
    
        return false;
    }
}
?>