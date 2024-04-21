
<?php 
    class RefillStore extends Controller{
        public function index() {
            $storeMaterialsModel = new StoreMaterials();
            
            $data['materials'] = $storeMaterialsModel->getAllMaterials(); // Assuming you have a method to fetch all materials
            $this->view('storeRefill', $data);
        }
           

        public function add(){
            if(count($_POST) > 0){
                $maintainrequests=new StoreMaterials();
                $maintainrequests->insert($_POST);
                $this->redirect('storekeeperMaintain');
            }

            $this->view('storeRefill');
        }
        
      
        
    }
?>
