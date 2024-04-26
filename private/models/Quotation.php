<?php

//Project model
class Quotation extends Model
{

    protected $table = "quotation";

    protected $afterSelect = [
        // 'get_user',
        // 'get_m_user',
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
}

?>