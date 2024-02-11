
<?php 
class Suppliers extends Model{
    
    protected $table = "suppliers";
    
    public function getSupplier($value){


        $query="SELECT * FROM suppliers 
        INNER JOIN land ON project_requests.land_id = land.id 
        
        WHERE project_requests.user_id = :value AND project_requests.status_of_land='company' "; 

        //return $this->query($query);
        return $this->query($query, [
            'value' => $value,
        ]);
    }


    public function validate($DATA){

        $this->errors = array();

        /**
        name validation
        **/

        //empty
        if(empty($DATA['name'])) {
            $this->errors['name']="Name can't be empty";
        }

        /**
        contact_person_name validation
        **/

        //empty
        if(empty($DATA['contact_person_name'])) {
            $this->errors['contact_person_name']="Name can't be empty";
        }

        //only letters                                         
        if(!empty($DATA['contact_person_name']) && !preg_match('/^[a-zA-Z\s.]+$/',$DATA['contact_person_name'])) {
            $this->errors['contact_person_name']="Only letters allowed";
        }



        /**
        contact
        **/

        //empty
        if(empty($DATA['contact_person_number'])){
            $this->errors['contact_person_number']="Contact Number can't be empty ";
        }

        //only digita and space between 3rd and 4th digits
        if(!empty($DATA['contact_person_number']) && !preg_match('/^\d{3}\s\d{7}+$/',$DATA['contact_person_number'])) {
            $this->errors['contact_person_number']="Follow this format ; eg:071 2009894";
        }

        
        /**
        address
        **/

        //empty
        if(empty($DATA['address'])){
            $this->errors['address']="Address can't be empty ";
        }

       

        /**
        email
        **/

        //empty
        if(empty($DATA['contact_person_email']) ){
            $this->errors['contact_person_email']="Email can't be empty ";
        }


        //valid contact_person_email
        if(!empty($DATA['contact_person_email']) && !filter_var($DATA['contact_person_email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['contact_person_email']="Email is invalid ";
        }


         /**
        material validation
        **/
        
        $materials=['Paint','Tile','Cement','Bricks & Other'];
        if(empty($DATA['material']) || !in_array($DATA['material'],$materials)){
            $this->errors['material']="Material is invalid ";
        }


        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }




    public function validate2($DATA){

        $this->errors = array();

        
        /**
        contact_person_name validation
        **/

        //empty
        if(empty($DATA['contact_person_name'])) {
            $this->errors['contact_person_name']="Name can't be empty";
        }

        //only letters                                         
        if(!empty($DATA['contact_person_name']) && !preg_match('/^[a-zA-Z\s.]+$/',$DATA['contact_person_name'])) {
            $this->errors['contact_person_name']="Only letters allowed";
        }

        /**
        contact
        **/

        //empty
        if(empty($DATA['contact_person_number'])){
            $this->errors['contact_person_number']="Contact Number can't be empty ";
        }

        //only digita and space between 3rd and 4th digits
        if(!empty($DATA['contact_person_number']) && !preg_match('/^\d{3}\s\d{7}+$/',$DATA['contact_person_number'])) {
            $this->errors['contact_person_number']="Follow this format ; eg:071 2009894";
        }

        /**
        email
        **/

        //empty
        if(empty($DATA['contact_person_email']) ){
            $this->errors['contact_person_email']="Email can't be empty ";
        }


        //valid contact_person_email
        if(!empty($DATA['contact_person_email']) && !filter_var($DATA['contact_person_email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['contact_person_email']="Email is invalid ";
        }


        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }





















}
?>