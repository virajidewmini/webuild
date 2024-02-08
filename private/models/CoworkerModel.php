
<?php 
class CoworkerModel extends Model{
    protected $table = "coworker";
    public function processCsv($csvData) {

        foreach ($csvData as $row) {
            $name = $row['name'];
            $phoneNo = $row['phone_no'];
            $district = $row['district'];
            $address = $row['address'];
            $role = $row['role'];

            $this->insert([
                'name' => $name,
                'phone_no' => $phoneNo,
                'district' => $district,
                'address' => $address,
                'role' => $role,
            ]);
        }
    }
    
}
?>