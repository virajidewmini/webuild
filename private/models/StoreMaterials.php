<?php

class storeMaterials extends Model
{
    protected $table = "materials";

    public function findAllSortedByStatus() {
        // Fetch all rows from the materials table and sort by status
        $sql = "SELECT * FROM $this->table ORDER BY Status = 'LOW' DESC";
        // Execute the query and fetch the data
        // Example using PDO:
        // $stmt = $this->db->query($sql);
        // return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Other methods...
}
?>
