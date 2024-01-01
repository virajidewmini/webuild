<?php 
class Staffs extends Model{

    protected $table = "staff";


    protected $allowedColumns =[
        'firstname',
        'lastname',
        'email',
        'password',
        'nic',
        'contactnumber',
        'address',
        'district',
        'role',
        'joineddate',
        'experience',
        'qualification',
        'image',
        'birth_date',
        'gender'
        
    
    ];
  
    protected $beforeInsert =[
        'hash_password'
    ];

    public function validate($DATA){

        $this->errors = array();

        /**
        firstname validation
        **/

        //empty
        if(empty($DATA['firstname'])) {
            $this->errors['firstname']="Name can't be empty";
        }

        //only letters
        if(!empty($DATA['firstname']) && !preg_match('/^[a-zA-Z\s]+$/',$DATA['firstname'])) {
            $this->errors['firstfirstname']="Only letters allowed";
        }

         /**
        lastname validation
        **/

        //empty
        if(empty($DATA['lastname'])) {
            $this->errors['lastname']="Name can't be empty";
        }

        //only letters
        if(!empty($DATA['lastname']) && !preg_match('/^[a-zA-Z\s]+$/',$DATA['lastname'])) {
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
        district
        **/

        //empty
        if(empty($DATA['district'])){
            $this->errors['district']="District can't be empty ";
        }


        /**
        role
        **/

        //empty
        if(empty($DATA['role'])){
            $this->errors['role']="Role can't be empty ";
        }

        /**
        email
        **/

        /**
        gender
        **/

        //empty
        if(empty($DATA['gender'])){
            $this->errors['gender']="Gender can't be empty ";
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

        //check whether it already exists
        if($this->where('email',$DATA['email'])){
            $this->errors['email']="The email already exists ";
        }

         /**
        password validation
        **/

        //empty
        if(empty($DATA['password'])){
            $this->errors['password']="Password can't be empty ";
        }

        //password length
        if(strlen($DATA['password'])<8 || strlen($DATA['password'])>12){
            $this->errors['password']="Password should have 8-12 characters.";
        }


        //password strength
        if(!empty($DATA['password']) && !preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9])/',$DATA['password'])){
            $this->errors['password']="Your Password does not meet the expected criteria; should contain an uppercase letter a number and a special character";
        }



        //same as confirmpassword
        if(!empty($DATA['password']) && !empty($DATA['confirmpassword']) && ($DATA['password'] != $DATA['confirmpassword'])){
            $this->errors['password']="Passwords do not match";
        }
         /**
        role validation
        **/
        
        $roles=['Project Coordinator','Project Manager','Storekeeper','Supervisor'];
        if(empty($DATA['role']) || !in_array($DATA['role'],$roles)){
            $this->errors['role']="Role is invalid ";
        }
         /**
        gender validation
        **/
        
        $genders=['male','female','other'];
        if(empty($DATA['gender']) || !in_array($DATA['gender'],$genders)){
            $this->errors['gender']="Gender is invalid ";
        }


        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }
    public function validate2($DATA){

        $this->errors = array();

        /**
        firstname validation
        **/

        //empty
        if(empty($DATA['firstname'])) {
            $this->errors['firstname']="Name can't be empty";
        }

        //only letters
        if(!empty($DATA['firstname']) && !preg_match('/^[a-zA-Z\s]+$/',$DATA['firstname'])) {
            $this->errors['firstfirstname']="Only letters allowed";
        }

         /**
        lastname validation
        **/

        //empty
        if(empty($DATA['lastname'])) {
            $this->errors['lastname']="Name can't be empty";
        }

        //only letters
        if(!empty($DATA['lastname']) && !preg_match('/^[a-zA-Z\s]+$/',$DATA['lastname'])) {
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
        district
        **/

        //empty
        if(empty($DATA['district'])){
            $this->errors['district']="District can't be empty ";
        }


        /**
        role
        **/

        // //empty
        // if(empty($DATA['role'])){
        //     $this->errors['role']="Role can't be empty ";
        // }
        //  /**
        // role validation
        // **/
        
        // $roles=['Project Coordinator','Project Manager','Storekeeper','Supervisor'];
        // if(empty($DATA['role']) || !in_array($DATA['role'],$roles)){
        //     $this->errors['role']="Role is invalid ";
        // }


        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }
    

    public function hash_password($data){
        $data['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
        return $data;
    }

    
}

?>

