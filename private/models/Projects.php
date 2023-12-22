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


}