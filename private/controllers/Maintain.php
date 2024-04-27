<?php
class Maintain extends Controller
{
    public function index()
{

    $storeMaintain = new StoreMaterials();
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




