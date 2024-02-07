<?php 
class Land extends Model{
    protected $table = "land";
    
    public function validate($DATA){
        $this->errors = array();
        if(count($this->errors) == 0){
            return true;
        }
    
        return false;
    }
}
?>