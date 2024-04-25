<?php 
    class ContactUsHome extends Controller{
        public function index(){
            
         
                $ContactUsHome=new ContactUs();

                
                $data=$ContactUsHome->findAll();
                $this->view('hoameNewlanding',['rows'=> $data]);
        }
           



        public function add(){
            if(count($_POST) > 0){
                $ContactUsHome=new ContactUs();
                $ContactUsHome->insert($_POST);
                $this->redirect('hoameNewlanding');
            }

            $this->view('hoameNewlanding');
        }
        
       
        
    }
?>