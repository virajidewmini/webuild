<?php

/**
 * Authentication Class
 * */
class Auth{

    public static function authenticate($row){
        //code
        $_SESSION['USER']=$row;
    }
    public static function logout(){
        //code
        if(isset($_SESSION['USER'])){
            unset($_SESSION['USER']);

        }
    }
    public static function logged_in(){
        //code
        if(isset($_SESSION['USER'])){
            return true;
        }

        return false;
    }
    public static function user(){
        //code
        if(isset($_SESSION['USER'])){
            return $_SESSION['USER']->firstname;
        }

    }

    public static function id(){
        //code
        if(isset($_SESSION['USER'])){
            return $_SESSION['USER']->id;
        }

    }

    public static function __callStatic($method,$params){
        
        $prop=strtoLower(str_replace("get","",$method));
        if(isset($_SESSION['USER']->$prop)){
            return $_SESSION['USER']->$prop;
        }

    }
}