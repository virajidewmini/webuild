<?php

//request form controller
    class Pmmaterial_rform extends Controller{

        public function index(){
            print_r($_POST);

            $errors = array();
            if(count($_POST)>0){

                $material_request = new Material_request();
                if ($material_request->validate($_POST)){
                    $material_request->insertPostData($_POST,$connn);
                    $this->redirect('pmmaterial');
                }
                else{
                    $errors = $material_request->errors;
                }
            }
        
            $this->view('pmmaterial_rform',['errors'=>$errors]);
        }

    }
?>