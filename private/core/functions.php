<?php

    //
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


    //escape
    function esc($var){

        return htmlspecialchars($var);
    }

    function get_date($date){
        return date("jS F, Y",strtotime($date));
    }



?>