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
