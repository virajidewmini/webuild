<?php

// Database connection

class Database {

    private function connect(){

        //code
        $string = "mysql:host=localhost;dbname=webuild";
        if(!$con=new PDO($string,'root','')){

            die('could not connect to database');

        }

        return $con;
    }

    public function query($query,$data=array(),$data_type= "object"){

        $con = $this->connect();
        $stm = $com->prepare($query);

        if($stm){
            $check = $stm->execute($data);
            if($check){
                if($data_type=="object"){
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                }
                else{
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if(is_array($data) && count($dara) > 0){
                    return $data;
                }
                
            }
        }
        return false;
    }

    // public function query(){
        
    // }



}

?>