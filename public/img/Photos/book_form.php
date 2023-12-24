<?php
 $connection = mysqli_connect('localhost','root','','contact_db');

 if(isset($_POST['send'])){
  $name =$_POST['name'];
  $email =$_POST['email'];
  $phone =$_POST['phone'];
  $address =$_POST['address'];
  $location =$_POST['location'];

  $request = "insert into contact_form(name, email, phone, address, location) values ('$name','$email','$phone','$address','$location')";

  mysqli_query($connection, $request);

  header('location:contact.php');
 }
 else{
  echo 'something went wrong try again';
 }
?>