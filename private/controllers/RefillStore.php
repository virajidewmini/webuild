
<?php 
    class RefillStore extends Controller{
        public function index(){
            
          $refill=new Refill();

                
          $data=$refill->findAll();
         
          $this->view('storeRefill');
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
