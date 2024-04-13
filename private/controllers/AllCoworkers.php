<?php

    class AllCoworkers extends Controller{
        
        public function index(){
            $worker=new CoworkerModel();
            $data=$worker->findAll();

            $this->view('ViewCoworkers',['worker'=>$data]);
        }

        public function add(){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] === UPLOAD_ERR_OK) {
                    $csvData = $this->readCsvFile($_FILES['csv_file']['tmp_name']);
    
                    $uploadModel = new CoworkerModel();
                    $uploadModel->processCsv($csvData);
                    
                } else{
                    $model=new CoworkerModel();
                    $model->insert($_POST);
                }
                $this->redirect('allcoworkers');
            }
            $this->view('AddCoworker');
        }

        public function editCoworker($id=null){

            $model=new CoworkerModel();
            $data=$model->where('id',$id);
            if($data){
                $data=$data[0];
            }

            if(count($_POST) > 0){

                $model=new CoworkerModel();
			    $model->update($id,$_POST);

                  $this->redirect('allcoworkers');
            }

            $this->view('UpdateCoworker',['rows'=>$data]);
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
   
        public function delete($id=null){
           
            if(count($_POST) > 0){
                $coworker=new CoworkerModel();
			    $coworker->delete($id);
                $this->redirect('allcoworkers');

            }
            $this->view('DeleteComplaint');
        }
    

        
    }
?>