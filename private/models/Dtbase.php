<?php 
class Dtbase extends Model{
    protected $table1 = "projects";
    protected $table2 = "user";
    protected $table3= "project_dprs";

    protected $table4= "project_tasks";
    protected $table5= "members_projects";
    protected $table6= "staff";



    //gaveesha for requests
    

    protected $afterSelect = [
        'get_user',
    ];

    public function validate($DATA){

        return false;
    }

    public function get_user($data){

        $user = new Staffs();
        foreach ($data as $key => $row){
            
            $result = $user->where('id',$row->supervisor_id);
            $data[$key]->user = is_array($result) ? $result[0] : false ;

        }

        return $data;
    }

}
?>