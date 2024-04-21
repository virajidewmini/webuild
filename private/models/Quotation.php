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


}
?>