
<?php 
class ProgressReport extends Model{
    protected $table = "daily_progress_report";

    public function setTable($table) {
        $this->table = $table;
    }

    
}
?>