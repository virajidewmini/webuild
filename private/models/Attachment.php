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
    
}
?>
