<?php 
class Modification extends Model{
    // protected $table = "modification";
    protected $table;

    public function setTable($table) {
        $this->table = $table;
    }
    
    public function validate($DATA){
        $this->errors = array();
        if(count($this->errors) == 0){
            return true;
        }
    
        return false;
    }
}
?>