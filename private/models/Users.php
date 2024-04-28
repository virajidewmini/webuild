<?php 
class Users extends Model{

    protected $table = "user";

    protected $allowedColumns =[
        'firstname',
        'lastname',
        'nic',
        'gender',
        'contactnumber',
        'address',
        'email',
        'password'
    ];

    protected $beforeInsert =['hash_password'];

    protected $beforeUpdate =['hash_password'];



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
        if(!empty($DATA['nic']) && !preg_match('/^([0-9]{9}[Vv]||[0-9]{12})$/',$DATA['nic'])) {
            $this->errors['nic']="Invalid NIC Number";
        }


        /**
        contact
        **/

        //empty
        if(empty($DATA['contactnumber'])){
            $this->errors['contactnumber']="Contact Number can't be empty ";
        }

        //valid contactnumber
        if(!empty($DATA['contactnumber']) && !preg_match('/^0\d{9}$/',$DATA['contactnumber'])) {
            $this->errors['contactnumber']="Invalid contactnumber Number; Enter only the 10 digits";
        }




        /**
        gender
        **/

        //empty
        $genders = ['female','male','other'];
        if(empty($DATA['gender'])){
            $this->errors['gender']="Please choose gender and try again";
        }
        elseif(!in_array($DATA['gender'], $genders)){
            $this->errors['gender']="Gender is not valid";
        }




        /**
        address
        **/

        //empty
        if(empty($DATA['address'])){
            $this->errors['address']="Address can't be empty ";
        }


        // /**
        // username
        // **/

        // //empty
        // if(empty($DATA['username'])){
        //     $this->errors['username']="Username can't be empty ";
        // }

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
        if((!empty($DATA['password'])) && ($DATA['password'] != $DATA['confirmpassword'])){
            $this->errors['password']="Passwords do not match";
        }

        if(count($this->errors) == 0){
            return true;
        }
        return false;


    }
    


    public function hash_password($data){
        $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);
        return $data;
    }



    //for first email validation
    public function emailtakenvalidation($email){
        

        $this->errors = array();

        if($this->where('email',$email)){
            $this->errors['email']="The email already exists ";
        }

        if(count($this->errors) == 0){
            return false;
        }
        return true;
    }


        /**
        password validation
        **/
    public function passwordValidation($DATA){

        $this->errors = array();
        //empty
        if(empty($DATA['password'])){
            $this->errors['password']="Password can't be empty ";
        }

        //password length
        if((!empty($DATA['password'])) && (strlen($DATA['password'])<8 || strlen($DATA['password'])>12)){
            $this->errors['password']="Password should have 8-12 characters.";
        }


        //password strength
        if(!empty($DATA['password']) && !preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9])/',$DATA['password'])){
            $this->errors['password']="Your Password does not meet the expected criteria; should contain an uppercase letter a number and a special character";
        }



        //same as confirmpassword
        if((!empty($DATA['password'])) && (!empty($DATA['confirmpassword'])) && ($DATA['password'] != $DATA['confirmpassword'])){
            $this->errors['password']="Passwords do not match";
        }


        if(empty($DATA['confirmpassword'])){
            $this->errors['confirmpassword']="Confirm New Password can't be empty ";
        }

        if(count($this->errors) == 0){
            return true;
        }
        return false;
    }


    public function getIdByEmail($email){

        $query="SELECT id FROM user 
        WHERE user.email = :email"; 

        //return $this->query($query);
        return $this->query($query, [
            'email' => $email,
        ]);

    }

    public function getNotificationCountByClient($value){

        $query="SELECT COUNT(*) AS total FROM notifications WHERE customer_id = :value AND status ='Unseen'";


        return $this->query($query, [
            'value' => $value,
        ]);
    }

    public function getNotificationsByClient($value){


        $query="SELECT * FROM notifications WHERE customer_id = :value AND status ='Unseen' ";


        return $this->query($query, [
            'value' => $value,
        ]);
    }
    
}

?>

