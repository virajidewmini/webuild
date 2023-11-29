<?php 
class Users extends Model{

    public function validate($DATA){

        $this->errors = array();

        /**
        firstname validation
        **/

        //empty
        if(empty($DATA['firstname'])) {
            $this->errors['firstname']="First Name can't be empty";
        }

        //only letters
        if(!empty($DATA['firstname']) && !preg_match('/^[a-zA-Z]+$/',$DATA['firstname'])) {
            $this->errors['firstname']="Only letters allowed";
        }


         /**
        lastname validation
        **/

        //empty
        if(empty($DATA['lastname'])) {
            $this->errors['lastname']="Last Name can't be empty";
        }

        //only letters
        if(!empty($DATA['lastname']) && !preg_match('/^[a-zA-Z]+$/',$DATA['lastname'])) {
            $this->errors['lastname']="Only letters allowed";
        }

        /**
        NIC
        **/

        //empty
        if(empty($DATA['nic'])){
            $this->errors['nic']="NIC can't be empty ";
        }

        //valid NIC
        if(!empty($DATA['nic']) && !preg_match('/^([0-9]{9}[VX]|[0-9]{12})$/',$DATA['nic'])) {
            $this->errors['nic']="Invalid NIC Number";
        }


        /**
        contact
        **/

        //empty
        if(empty($DATA['contactnumber'])){
            $this->errors['contactnumber']="Contact Number can't be empty ";
        }


        /**
        address
        **/

        //empty
        if(empty($DATA['address'])){
            $this->errors['address']="Address can't be empty ";
        }


        /**
        username
        **/

        //empty
        if(empty($DATA['username'])){
            $this->errors['username']="Username can't be empty ";
        }

        /**
        email
        **/

        //empty
        if(empty($DATA['email']) ){
            $this->errors['email']="Email can't be empty ";
        }


        //valid email
        if(!empty($DATA['email']) && !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['email']="Email is invalid ";
        }


        /**
        password validation
        **/

        //empty
        if(empty($DATA['password'])){
            $this->errors['password']="Password can't be empty ";
        }

        //same as confirmpassword
        if($DATA['password'] != $DATA['confirmpassword']){
            $this->errors['password']="Passwords do not match";
        }

        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }
    protected $table = "user";
    
}
?>
