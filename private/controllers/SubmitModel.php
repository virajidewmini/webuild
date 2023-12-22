<?php

    class SubmitModel extends Controller{
        
        public function index(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Assuming the form fields are correctly named in the HTML form
                $userData = [
                    'occupation' => $_POST['occupation'],
                    'salary' => $_POST['salary']
                    // Add other fields as needed
                ];
    
                $landData = [
                    'street' => $_POST['street'],
                    'town' => $_POST['town'],
                    'district' => $_POST['district'],
                    'area' => $_POST['area']
                    // Add other fields as needed
                ];
    
                $test = new UserTest();
                $lands = new UserLand();
    
                // Insert data into 'user_test' table

                
              
                $test->insert($userData);
              
               
               
                
                    $lands->insert($landData);
                
            }

            // if (isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] === UPLOAD_ERR_OK) {
            //     $uploadedFileName = $_FILES['imageFile']['name'];
            //     $tempFilePath = $_FILES['imageFile']['tmp_name'];
        
            //     // You may want to validate the file type, size, etc., before proceeding
        
            //     // Move the file to a permanent location
            //     $uploadPath = 'uploads/' . $uploadedFileName;
            //     move_uploaded_file($tempFilePath, $uploadPath);
        
            //     echo 'Image uploaded successfully.';
            // } else {
            //     echo 'Error uploading image.';
            // }

            $paintView=new Paint();
            $data=$paintView->findAll();
            $this->view('SubmitModel',['rows'=> $data]);
        }

    }
?>