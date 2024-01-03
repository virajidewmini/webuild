<?php

//Project model
class Projects extends Model{

protected $table = "projects";

protected $afterSelect = [
    'get_users',
    'get_userm'
];


public function validate($DATA){
    $this->errors = array();
    if(count($this->errors) == 0){
        return true;
    }

    return false;
}

public function get_userm($data){

    $staff = new Staffs();
    foreach ($data as $key => $row2){
        
        $result = $staff->where('id',$row2->manager_id);
        $data[$key]->staffm = is_array($result) ? $result[0] : false ;

    }

    return $data;
}


public function get_users($data){
    
    $staff = new Staffs();
    foreach ($data as $key => $row2){
        
        $result = $staff->where('id',$row2->supervisor_id);
        $data[$key]->staffs = is_array($result) ? $result[0] : false ;

    }

    return $data;

}


}