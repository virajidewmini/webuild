<?php
    //main app file
    class  App{
        protected $controller="home";
        protected $method="index";
        protected $params=array();

        public function __construct(){
            //code
            $URL = $this->getURL();
            
            //controller
            if(file_exists("../private/controllers/".$URL[0].".php")){
                $this->controller = ucfirst($URL[0]);
                unset($URL[0]);//reason why we do this is finally when we get to params we need to take all the remaing as params
            }
            require "../private/controllers/".$this->controller.".php";
            //instantiate the controller class
            //intially controller variable held a string value but now it holds a object of the relevant controller class (eg: user)
            $this->controller = new $this->controller;


            //method
            if (isset($URL[1])){
                if (method_exists($this->controller,$URL[1])){//method_exists(object_name,method_name) & here in controller now we have the object of the relevant controller class
                    $this->method=ucfirst($URL[1]);
                    unset($URL[1]);
                }
            }

            $URL = array_values($URL);
		    $this->params = $URL;
            call_user_func_array([$this->controller,$this->method],$this->params);


            //parameters
            //isset()
            

        }
        private function getURL(){

            $url = isset($_GET['url']) ? $_GET['url'] : "home";
            return explode("/",filter_var(trim($url,"/")),FILTER_SANITIZE_URL);//trim will remove "/" from localhost/schoolmanagement/public/student///
            
            


        }
    }



?>