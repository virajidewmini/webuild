<?php
class Maintain extends Controller
{
    public function index()
{
    // Initialize data array
    $data = [];

    // Check if there is a search query
    $filter = isset($_GET['filter']) ? $_GET['filter'] : null;

    // If a filter is applied, filter the data by project_id
    if ($filter !== null) {
    // Perform filtering based on project_id
    $filteredData = array_filter($data, function($row) use ($filter) {
    return stripos($row->material_name, $filter) !== false;
    });
    }

    // Fetch materials data
    $storeMaintain = new StoreMaterials();
    $data['materials'] = $storeMaintain->findAll();

    // Sort materials data
    usort($data['materials'], function ($a, $b) {
        if ($a->status == 'NORMAL' && $b->status != 'NORMAL') {
            return 1; // Move "REJECT" row to the bottom
        } elseif ($a->status != 'NORMAL' && $b->status == 'NORMAL') {
            return -1; // Keep "REJECT" row at the top
        } else {
            return 0; // Preserve original order for other rows
        }
    });

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




