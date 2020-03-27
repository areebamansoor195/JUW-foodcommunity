<?php

require 'config.php';


$user =mysqli_real_escape_string($con,$_POST['username']) ;
$email =mysqli_real_escape_string($con,$_POST['email']) ;
$password =mysqli_real_escape_string($con,$_POST['password']) ;
$conpassword =mysqli_real_escape_string($con,$_POST['conpassword']) ;
$sql = "INSERT INTO register (username,email,pass,cpass)
 VALUES ('$user','$email','$password','$conpassword')";

   
  
   
   
?>
