<?php

    class AllCoworkers extends Controller{
        
        public function index(){
            $worker=new CoworkerModel();
            $data=$worker->findAll();

            $this->view('ViewCoworkers',['worker'=>$data]);
        }

        public function add(){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                var_dump(isset($_FILES['csv_file']));
                if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] === UPLOAD_ERR_OK) {
                    $csvData = $this->readCsvFile($_FILES['csv_file']['tmp_name']);
    
                    $uploadModel = new CoworkerModel();
                    $uploadModel->processCsv($csvData);
                    
                } 
                $this->redirect('allcoworkers');
            }
            $this->view('AddCoworker');
        }

        
        private function readCsvFile($filePath) {
            // Read CSV file and return data as an array
            $csvData = [];
            if (($handle = fopen($filePath, 'r')) !== false) {
                while (($row = fgetcsv($handle)) !== false) {
                    $csvData[] = [
                        'name' => $row[0],
                        'phone_no' => $row[1],
                        'district' => $row[2],
                        'address' => $row[3],
                        'role' => $row[4],
                    ];
                }
                fclose($handle);
            }
            return $csvData;
        }
   

    

        
    }
?>