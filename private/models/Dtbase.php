<?php 
class Dtbase extends Model{
    protected $table1 = "project_details";
    protected $table2 = "user";
    protected $table3= "project_dprs";

    protected $afterSelect = [
        'get_user',
    ];

    public function validate($DATA){

        return false;
    }

    public function get_user($data){

        $user = new Users();
        foreach ($data as $key => $row){
            
            $result = $user->where('id',$row->s_user_id);
            $data[$key]->user = is_array($result) ? $result[0] : false ;

        }

        return $data;
    }

}
?>