<?php
class Maintain extends Controller
{
    public function index()
{
    // Initialize data array
    // Initialize data array
    $data = [];

    // Check if there is a search query
    $filter = isset($_GET['material_name']) ? $_GET['material_name'] : null;

    // If a filter is applied, filter the data by material_name
    if ($filter !== null) {
        // Perform filtering based on material_name
        $filteredData = array_filter($data, function ($row) use ($filter) {
            return stripos($row->material_name, $filter) !== false;
        });

        $data = $filteredData;
    }

    // Fetch materials data
    $storeMaintain = new StoreMaterials();
    // Sort materials data
    
    $data = $storeMaintain->geMaterialsdetails();
    $tiles = $storeMaintain->getTilesdetails();
    $paints = $storeMaintain->getPaintsdetails();
 

    $this->view('storekeeperMaintain',[
        'rows'=>$data,
        'tiles'=>$tiles,
        'paints'=>$paints
    ]);
}

   
}



?>




