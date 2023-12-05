<?php
    function get_var($key){
        if(isset($_POST[$key])){
            return $_POST[$key];
        }
        return "";
    }

    function get_select($key,$value){
        if(isset($_POST[$key])){
            if($_POST[$key] == $value){
                return "selected";
            }
        }

        return "";
    }

    function esc($var){
        return htmlspecialchars($var);
    }

    function get_vars($keys){
        $values = [];
    
        foreach ($keys as $key) {
            if(isset($_POST[$key])){
                $values[$key] = $_POST[$key];
            } else {
                $values[$key] = "";
            }
        }
    
        return $values;
    }
    


?>