<?php
    class Controller{

        public function view($view, $data = array()){
            extract($data);

            if (file_exists("../private/views/" . $view . ".view.php")) {
                return include "../private/views/" . $view . ".view.php";
            } else {
                return include "../private/views/404.view.php";
            }

        }
    }


?>