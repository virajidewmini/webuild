<?php 
    class Request extends Controller{
        public function index(){
            
                //$db = new Database();
                //$request=$this->load_model('request');
                $request=new Requests();
                // $data = $db->query("select * from miantain");
                //$data= $request->where('id',1);
                //$arr['project_id']='2';
                
          
                //$arr['status']='Pending';
                //$request->insert($arr);
                // $request->update(3,$arr);
                // $request->delete(4);
                $data=$request->findAll();


            // Check if there is a search query
$filter = isset($_GET['filter']) ? $_GET['filter'] : null;

// If a filter is applied, filter the data by p_id
if ($filter !== null) {
    // Perform filtering based on p_id
    $filteredData = array_filter($data, function($row) use ($filter) {
        return stripos($row->p_id, $filter) !== false;
    });

    $data = $filteredData;
}               


 

                $this->view('storekeeperrequest',['rows'=> $data]);



        }

        // public function add(){
        //     if(count($_POST) > 0){
        //         $request=new QuotationSK();
        //         $request->insert($_POST);
        //         $this->redirect('quotationorder');
        //     }

        //     $this->view('storekeeperRequestQuotation');
        // }


        
        // public function delete($id=null){
           
        //     if(count($_POST) > 0){
        //         $request=new QuotationSK();
        //         $request->delete($id);
        //         $this->redirect('quotationorder');

        //     }
        //     $this->view('storekeeperDeleteQuotation');
        // }
        
        // public function update($id=null){
           
        //     if(count($_POST) > 0){
        //         $request=new QuotationSK();
        //         $request->update($id,$_POST);
        //         $this->redirect('quotationorder');

        //     }
        //     $this->view('storekeeperUpdateQuotation');
        // }
        
    }
?>
