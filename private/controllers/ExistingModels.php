<?php
class ExistingModels extends Controller
{
    public function index()
    {

       
        // $storeMaintain = new StoreMaterials();

      
       
        
        $this->view('homelandingexisting');
    }

    public function gallery1(){
      
      $this->view('homegallery1');
  }
  public function gallery2(){
      
    $this->view('homegallery2');
}
public function gallery3(){
      
  $this->view('homegallery3');
}
public function gallery4(){
      
  $this->view('homegallery4');
}
public function gallery5(){
      
  $this->view('homegallery5');
}
}