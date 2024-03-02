<?php
    class Controller
    {
    
    
        public function view($view,$data = array())
        {
            extract($data);
            // code...
    
            if(file_exists("../private/views/" . $view . ".view.php"))
            {
                require ("../private/views/" . $view . ".view.php");
            }else{
                require ("../private/views/404.view.php");
            }
        }

        public function load_model($model){

		    if(file_exists("../private/models/".ucfirst($model).".php"))
		    {
			    require("../private/models/".ucfirst($model).".php");
			    return $model = new $model();
		    }
		
		    return false;
	    } 
        
        public function redirect($link){

		    header("Location: ". ROOT . "/".trim($link,"/"));
		    die;
	    }


        public function redirectWithParams($link, $params = array()) {
            $queryString = http_build_query($params); // Convert parameters to query string
        
            // Append query string to the URL
            $redirectUrl = ROOT . '/' . trim($link, '/') . '?' . $queryString;
        
            header("Location: " . $redirectUrl);
            die;
        }
        
    }
    

?>