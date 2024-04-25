<?php
    use Respect\Validation\Validator as v;
    class AllCoworkers extends Controller{
        
        public function index(){
            $worker=new CoworkerModel();
            $data=$worker->findAll();

            $this->view('ViewCoworkers',['worker'=>$data]);
        }

        public function add(){

            

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $errors = [];

                $nameValidator = v::notEmpty()->stringType()->length(null, 30);
                $addressValidator = v::notEmpty()->regex('/^[a-zA-Z0-9,\s]+$/')->length(null, 100);
                $phoneNumberValidator = v::regex('/^947\d{8}$/');


                if (! $nameValidator->validate($_POST['name'])) {
                    $errors['name'] = 'Name must be a string with maximum length 30 and can not empty';
                }

                if (! isset($_POST['role'])) {
                    $errors['role'] = 'Please select role';
                }

                if (! isset($_POST['district'])|| empty($_POST['district']) || $_POST['district'] == 'Choose a District'){
                    $errors['district'] = 'Please select district';
                }

                if (! $addressValidator->validate($_POST['address'])) {
                    $errors['address'] = 'Address must be maximum length 100 and can not empty';
                }

                if (! $phoneNumberValidator->validate($_POST['phone_no'])) {
                    $errors['phone_no'] = 'Phone Number must be in 947xxxxxxxx format and can not empty';
                }

                

                if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] === UPLOAD_ERR_OK) {
                    $csvData = $this->readCsvFile($_FILES['csv_file']['tmp_name']);
    
                    $uploadModel = new CoworkerModel();
                    $uploadModel->processCsv($csvData);
                    
                } else{
                    if (empty($errors)) {
                        $model=new CoworkerModel();
                        $model->insert($_POST);
                    }else{
                        $this->view('AddCoworker',['errors' => $errors]);
                    }
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