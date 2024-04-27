<?php

class UploadModel extends Model
{
    public function uploadFiles($files)
    {
        $uploadDir = 'uploads/';

        $uploadedFiles = [];

        foreach ($files['tmp_name'] as $key => $tmp_name) {
            $originalFileName = $files['name'][$key];
            $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

            // Generate a unique name for the file
            $newFileName = uniqid() . '_' . time() . '.' . $fileExtension;
            $targetFile = $uploadDir . $newFileName;

            // Move the file to the uploads directory
            if (move_uploaded_file($tmp_name, $targetFile)) {
                $uploadedFiles[] = $newFileName;
            }
        }


        return $uploadedFiles;
    }

    public function uploadQuotation($files)
    {
        $uploadDir = 'uploads/';

        $uploadedFiles = [];

        foreach ($files['tmp_name'] as $key => $tmp_name) {
            $originalFileName = $files['name'][$key];
            // $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

            // Generate a unique name for the file
            // $newFileName = uniqid() . '_' . time() . '.' . 
            $newFileName = $originalFileName ;
            $targetFile = $uploadDir . $newFileName;

            // Move the file to the uploads directory
            if (move_uploaded_file($tmp_name, $targetFile)) {
                $uploadedFiles[] = $newFileName;
            }
        }


        return $uploadedFiles;
    }
}
