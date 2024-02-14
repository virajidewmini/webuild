<?php 
    class Maintain extends Controller{
        public function index(){
            
                //$db = new Database();
                $storeMaintain=new StoreMaterials();

                // $data = $db->query("select * from miantain");
                $data= $storeMaintain->findAll();
                //$arr['project_id']='2';
                //$arr['status']='Pending';
                usort($data, function($a, $b) {
                    if ($a->status == 'NORMAL' && $b->status != 'NORMAL') {
                        return 1; // Move "REJECT" row to the bottom
                    } elseif ($a->status != 'NORMAL' && $b->status == 'NORMAL') {
                        return -1; // Keep "REJECT" row at the top
                    } else {
                        return 0; // Preserve original order for other rows
                    }
                });
                
                // Get the filter value from the request
        $materialNameFilter = isset($_GET['material_name']) ? $_GET['material_name'] : null;

        // If a filter is applied, filter the data by material_name
        if ($materialNameFilter !== null) {
            $filteredData = [];
            foreach ($data as $row) {
                if (stripos($row->material_name, $materialNameFilter) !== false) {
                    $filteredData[] = $row;
                }
            }
            $data = $filteredData;
        }
                

                
                //$mainTain->insert($arr);
                // $maintain->update(3,$arr);
                // $maintain->delete(4);
                // $data=$maintain->findAll();
                $this->view('storekeeperMaintain',['rows'=> $data]);
        }

        
        
    }
?>