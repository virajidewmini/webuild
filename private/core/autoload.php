<?php
    
    require "app.php";
    require "database.php";
    require "controller.php";
    require "config.php";
    require "model.php";

    //when a class is not found this runs
    spl_autoload_register(function($class_name){

        require "../private/models/". ucfirst($class_name) . ".php";
    });
 
?>