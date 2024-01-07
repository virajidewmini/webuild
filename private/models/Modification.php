<?php 
class Modification extends Model{
    // protected $table = "modification";
    protected $table;

    public function setTable($table) {
        $this->table = $table;
    }
    
}
?>