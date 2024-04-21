<?php

    //Manager members controller
    class Storekeeperdashboard extends Controller{
        
        public function index()
    {
        $storedashboard = new Storedashboard1();
        $data = $storedashboard->findAll();

        $request_c = new Project_material_request();
        $data1 = $request_c->getRequestcount();

        $loW_materials = new storeMaterials();
        $data2 = $loW_materials->getLOWMaterials_C();

        $data3 = $request_c->getRequest_types();

        $quotation = new QuotationSK();
        $data4 = $quotation->sentM_quptation_count();
        $this->view('storekeeperdashboard', ['rows' => $data, 'rows1' => $data1, 'rows2' => $data2, 'rows3' => $data3, 'rows4' => $data4]);
    }
    }
?>