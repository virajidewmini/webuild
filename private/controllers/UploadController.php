<?php



class UploadModel {
    public function uploadFiles($files) {
        $uploadDir = 'uploads/';

        $uploadedFiles = [];

        foreach ($files['tmp_name'] as $key => $tmp_name) {
            $file_name = $files['name'][$key];
            $file_tmp = $files['tmp_name'][$key];
            $file_size = $files['size'][$key];
            $file_type = $files['type'][$key];

            $target_file = $uploadDir . basename($file_name);

            // Check if file already exists
            if (file_exists($target_file)) {
                // Handle file exists scenario as per your requirement
            }

            // Move the file to the uploads directory
            if (move_uploaded_file($file_tmp, $target_file)) {
                $uploadedFiles[] = $target_file;
            }
        }

        return $uploadedFiles;
    }
}


class UploadController extends Controller{
    public function index() {


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['files'])) {
            $model = new UploadModel();
            $uploadedFiles = $model->uploadFiles($_FILES['files']);

            // Display success or error messages based on the $uploadedFiles array
            // You can customize this part based on your requirements
            if (!empty($uploadedFiles)) {
                echo "Files uploaded successfully:<br>";
                foreach ($uploadedFiles as $file) {
                    echo $file . "<br>";
                }
            } else {
                echo "File upload failed.";
            }
        } else {
            echo "Invalid request.";
        }
        $this->view('upload');
    }

    // public function handleUpload() {
    //     $model = new UploadModel();

    //     echo "Hiii bubba";
        
        
    // }
}
