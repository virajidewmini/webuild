<?php

//Project_tasks model
class Project_dprs extends Model{

protected $table = "Project_dprs";

protected $afterSelect = [
    'get_user',
];


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
        
        $result = $staff->where('id',$row->supervisor_id);
        $data[$key]->staff = is_array($result) ? $result[0] : false ;
        
    }

    return $data;
}


}