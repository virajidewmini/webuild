<?php

class UploadModel extends Model {
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
