<?php
    
    require "app.php";
    require "functions.php";
    require "database.php";
    require "controller.php";
    require "config.php";
    require "model.php";

    //when a class is not found this runs
    spl_autoload_register(function($class_name){

        $classname= str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
        $filename = '../vendor/' . $classname. '.php'; // Adjust path as needed

        if (file_exists($filename) ) {
            if (file_exists($filename)) {
                require_once $filename;
            }
        }else {
            require "../private/models/". ucfirst($class_name) . ".php";
        }
    });
 
?>