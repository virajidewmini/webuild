<?php
class ExistingModels extends Controller
{
    public function index()
    {
      $models = new Models();

      if(count($_POST)>0){
        print_r($_POST);
        $data=$models->selectModelsAccordingly($_POST['numRooms'],$_POST['numFloors']);
      }
      else{
        $data=$models->findAll();
      }       
        
       // $this->view('homelandingexisting',['rows'=>$data]);
       $this->view('homelandingexisting');
    }

    public function gallery1(){

      $_SESSION['model_id']=1;
      
      $this->view('homegallery1');
  }
  public function gallery2(){

    $_SESSION['model_id']=2;
      
    $this->view('homegallery2');
}
public function gallery3(){

  $_SESSION['model_id']=3;
      
  $this->view('homegallery3');
}
public function gallery4(){

  $_SESSION['model_id']=4;
      
  $this->view('homegallery4');
}
public function gallery5(){

  $_SESSION['model_id']=5;
      
  $this->view('homegallery5');
}
public function gallery6(){

  $_SESSION['model_id']=6;
      
  $this->view('homegallery6');
}
public function gallery7(){
  $_SESSION['model_id']=7;
$this->view('homegallery7');
}
public function gallery8(){
  $_SESSION['model_id']=8;
    
$this->view('homegallery8');
}
public function gallery9(){
  $_SESSION['model_id']=9;
    
$this->view('homegallery9');
}
}