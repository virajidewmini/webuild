<?php 
    class Request extends Controller{
        public function index(){
            
               
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

           // If a filter is applied, filter the data by project_id
           if ($filter !== null) {
           // Perform filtering based on project_id
           $filteredData = array_filter($data, function($row) use ($filter) {
           return stripos($row->project_id, $filter) !== false;
    });

    $data = $filteredData;
}               


 

                $this->view('storekeeperrequest',['rows'=> $data]);



        }

        // public function viewDetails($id=null){
            
        //         $request=new RequestsSecond();
        //         $request->findAll();
        //         var_dump($request);
              
            

        //     $this->view('storekeeperRequestSecond',['rows'=> $request]);
        // }



        public function viewDetails($id = null) {
            // Check if request ID is provided
            if ($id !== null) {
                // Instantiate the RequestsSecond model
                $requestSecond = new RequestsSecond();
                
                // Fetch data from the material_requests table based on request_id
                // $data = $requestSecond->findAll(['conditions' => ['request_id' => $id]]);
                $data = $requestSecond->where('request_id',$id);
                // Pass the filtered data to the view
                $this->view('storekeeperRequestSecond', ['rows' => $data]);
            }
        }
        
        
        
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
