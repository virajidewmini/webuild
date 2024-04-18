<?php 
class Attachment extends Model{
    protected $table = "attachment";



    //get sttachments of complaints
    public function getComplaintaAttachments($value){


        $query="SELECT * FROM attachment 
        
        WHERE attachment_type = 'COMPLAINT' AND reference_id = :value"; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }
    
}
?>
