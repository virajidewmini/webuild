<?php

//Project_tasks model
class Project_tasks extends Model{

protected $table = "Project_tasks";


public function validate($DATA){
    $this->errors = array();
    if(count($this->errors) == 0){
        return true;
    }

    return false;
}


}