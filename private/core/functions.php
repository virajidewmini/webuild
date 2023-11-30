<?php

    //
    function get_var($key){

        if(isset($_POST[$key])){
            return $_POST[$key];
        }

    }


    // function get_select(){

       /**
       we do not need this because we don;t have a select option in the form 
       **/
        
    // }


    //escape
    function esc($var){

        return htmlspecialchars($var);
    }




?>