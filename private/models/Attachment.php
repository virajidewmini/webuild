<?php 
class Attachment extends Model{
    protected $table = "attachment";


    public function getAttachment($referece_id,$type){
        $query="select * from attachment where reference_id=:reference_id && attachment_type=:type";
        $params=[
            'reference_id'=>$referece_id,
            'type'=>$type
        ];

        return($this->query($query,$params));


    }
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
