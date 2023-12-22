<?php

//Project model
class Projects extends Model{

protected $table = "projects";


public function validate($DATA){
    $this->errors = array();
    if(count($this->errors) == 0){
        return true;
    }

    return false;
}

public function get_user($data){

    $staff = new Staffs();
    foreach ($data as $key => $row){
        
        $result = $staff->where('id',$row->id);
        $data[$key]->staffs = is_array($result) ? $result[0] : false ;

    }

    return $data;
}


}