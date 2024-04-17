<?php
class Maintain extends Controller
{
    public function index()
{
    // Initialize data array
    $data = [];

    // Fetch materials data
    $storeMaintain = new StoreMaterials();
    $data['materials'] = $storeMaintain->findAll();

    // Initialize arrays to store different types of materials
    $tiles = [];
    $paints = [];
    $others = [];

    // Separate materials based on their types
    foreach ($data['materials'] as $row) {
        if ($row->type === 'tile') {
            $tiles[] = $row;
        } elseif ($row->type === 'paint') {
            $paints[] = $row;
        } else {
            $others[] = $row;
        }
    }

    
    // Add separated materials to the data array
    $data['tiles'] = $tiles;
    $data['paints'] = $paints;
    $data['others'] = $others;

    // Load the view with data
    $this->view('storekeeperMaintain', $data);
}

}

?>




