<?php

//Project model
class Projects extends Model{

protected $table = "projects";

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


// public function get_user($data){
    
//     $staff = new Staffs();
//     foreach ($data as $key => $row2){
        
//         $result = $staff->where('id',$row2->supervisor_id);
//         $data[$key]->staff = is_array($result) ? $result[0] : false ;

//     }

//     return $data;

// }

//get projects according to 
public function getProjectsInMonth($action,$period){
    
    $query="SELECT COUNT(*) AS total FROM projects 
        WHERE action = :action AND 
            CASE 
                WHEN :period = 'first'  THEN date LIKE '____-01-__' OR date LIKE '____-02-__' OR date LIKE '____-03-__'
                WHEN :period = 'second' THEN date LIKE '____-04-__' OR date LIKE '____-05-__' OR date LIKE '____-06-__'
                WHEN :period = 'third' THEN date LIKE '____-07-__' OR date LIKE '____-08-__' OR date LIKE '____-09-__'
                WHEN :period = 'fourth' THEN date LIKE '____-10-__' OR date LIKE '____-12-__' OR date LIKE '____-11-__'
                
                ELSE FALSE
            END 
        "; 
        
        return $this->query($query, [
            'action'=> $action,
            'period' => $period,
        ]);
    }

}