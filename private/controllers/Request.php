<?php 
    class Request extends Controller{
        public function index(){
            
               
                $request=new Requests();
              
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

        public function viewDetails($id = null) {
            // Check if request ID is provided
            if ($id !== null) {
                // Instantiate the RequestsSecond model
                $requestSecond = new RequestsSecond();
                
                // Fetch data from the material_requests table based on request_id
                // $data = $requestSecond->findAll(['conditions' => ['request_id' => $id]]);
                $data = $requestSecond->where('id',$id);
                // Pass the filtered data to the view
                $this->view('storekeeperRequestSecond', ['rows' => $data]);
            }
        }
 
    }
?>
