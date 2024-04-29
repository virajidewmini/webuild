<?php

//Project model
class Quotation extends Model
{

    protected $table = "quotation";

    protected $afterSelect = [
         'get_user',
         'get_manager',
        // 'get_u_user',
        // 'get_model',
        // 'get_task',
        // 'get_req',
        
    ];


    public function getTotalAmount($value){

        $query = "SELECT total_amount  FROM quotation 
        WHERE project_id = :value";

        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function getProjectDetails($value){

        $query = "SELECT *  FROM quotation 
        INNER JOIN projects
        ON quotation.project_id=projects.id
        INNER JOIN model
        ON projects.model_id=model.id
        WHERE quotation.id = :value";

        return $this->query($query, [
            'value' => $value,
        ]);
    }

    
    public function getQuotationName($value){

        $query = "SELECT quotation  FROM quotation 
        WHERE project_id = :value";

        return $this->query($query, [
            'value' => $value,
        ]);
    }
    
    public function getProjectId($value){

        $query = "SELECT id  FROM projects 
        WHERE project_request_id = :value";

        return $this->query($query, [
            'value' => $value,
        ]);
    }


    //check whether client has been notified of first installment or not
    public function getFirstInstallmentStatus($value){

        $query = "SELECT status FROM payments 
        WHERE project_id = :value AND installement_number=1 ";

        return $this->query($query, [
            'value' => $value,
        ]);
    }



    
    // public function changeQuotationStatustoDisplay($value){

    //     $query = "UPDATE quotation SET quotation.status = ""
    //     WHERE id = :value ";

    //     return $this->query($query, [
    //         'value' => $value,
    //     ]);
    // }
    
    public function getAllPendingQuotations(){

        $query = "SELECT quotation.* , projects.project_request_id,projects.manager_id,projects.payment_package_id FROM quotation 
        INNER JOIN projects ON quotation.project_id = projects.id
        WHERE quotation.status = 'Pending' OR quotation.status = 'Display' OR quotation.status = 'Paid'
        
        ORDER BY quotation.created_date ASC
        ";

        return $this->query($query);
    }

    public function get_user($data){

        $user = new Users();
        foreach ($data as $key => $row){
            if(property_exists($row,"user_id")){
                $result = $user->where('id',$row->user_id);
                $data[$key]->user = is_array($result) ? $result[0] : false ;
            }
        }
    
        return $data;
    }

    public function get_manager($data){

        $manager = new Staffs();
        foreach ($data as $key => $row){
            if(property_exists($row,"manager_id")){
                $result = $manager->where('id',$row->manager_id);
                $data[$key]->manager = is_array($result) ? $result[0] : false ;
            }
        }
    
        return $data;
    }







}

?>