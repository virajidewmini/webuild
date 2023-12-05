<?php

//Material_request model

    class Request_manager extends Model{

        public function validate($DATA){
            $this->errors = array();

            //chech for project_id
            if(empty($DATA['project_id'])){
                $this->errors['project_id']="Please enter Project ID and try again";
            }
            elseif(!preg_match('/^[a-zA-Z]{3}\d+$/',$DATA['project_id'])){
                $this->errors['project_id']="Project ID is invalid";
            }

            elseif(strlen($DATA['project_id'])==3){
                $this->errors['project_id']="Project ID is invalid";
            }

            
            //chech for manager_id
            if(empty($DATA['manager_id'])){
                $this->errors['manager_id']="Please enter Manager ID and try again";
            }
            elseif(!preg_match('/^[a-zA-Z]{3}\d+$/',$DATA['manager_id'])){
                $this->errors['manager_id']="Manager ID is invalid";
            }

            elseif(strlen($DATA['manager_id'])==3){
                $this->errors['manager_id']="Manager ID is invalid";
            }

            //chech for request_id
            if(empty($DATA['request_id'])){
                $this->errors['request_id']="Please enter Request ID and try again";
            }
            elseif(!preg_match('/^[a-zA-Z]{3}\d+$/',$DATA['request_id'])){
                $this->errors['request_id']="Request ID is invalid";
            }

            elseif(strlen($DATA['request_id'])==3){
                $this->errors['request_id']="Request ID is invalid";
            }


            if (count($this->errors)==0){
                return true;
            }

            return false;
        }
    }