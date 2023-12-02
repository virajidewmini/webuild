<?php

/**
 * Authentication Class
 * */
class Auth{

    public static function authentication($row){
        //code
        $_SESSION['USER']=$row;
    }
    public static function logout(){
        //code
        if(isse($_SESSION['USER']){
            unset($_SESSION['USER']);
        }
    }
    public static function logged_in(){
        //code
        if(isse($_SESSION['USER']){
            return true;
        }

        return false;
    }
}