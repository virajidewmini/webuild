<?php 
class Modification extends Model{
    protected $table = "modification";
    
    public function validate($DATA){
        $this->errors = array();
        if(count($this->errors) == 0){
            return true;
        }
    
        return false;
    }
}
?>