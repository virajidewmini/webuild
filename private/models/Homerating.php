<?php 
class Homerating extends Model{

    protected $table = "rate";
    
  public function getrating(){
    $query =$query = "select rate.*, user.firstname, user.lastname, user.email from rate inner join user where rate.user_id= user.id ";
    return $this->query($query);

  }

  public function charcolumn1(){
    $query =$query = "SELECT COUNT(*)  AS countgalle FROM material_quatation_detail WHERE district = 'Galle'; ";
    return $this->query($query);
  }
  public function charcolumn2(){
    $query =$query = "SELECT COUNT(*) AS countColombo FROM material_quatation_detail WHERE district = 'Colombo'; ";
    return $this->query($query);
  }
  public function charcolumn3(){
    $query =$query = "SELECT COUNT(*) AS countKaluthara FROM material_quatation_detail WHERE district = 'Kaluthara'; ";
    return $this->query($query);
  }
  public function charcolumn4(){
    $query =$query = "SELECT COUNT(*) AS countGampaha FROM material_quatation_detail WHERE district = 'Gampaha'; ";
    return $this->query($query);
  }
  public function charcolumn5(){
    $query =$query = "SELECT COUNT(*) AS countMatara FROM material_quatation_detail WHERE district = 'Matara'; ";
    return $this->query($query);
  }

  }

?>