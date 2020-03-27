<?php

require 'config.php';


$user =mysqli_real_escape_string($con,$_POST['username']) ;
$password =mysqli_real_escape_string($con,$_POST['pass']) ;
$sql = "INSERT INTO login (username,pass)
 VALUES ('$user','$password')";

if (mysqli_query($con, $sql)) {
  echo "  ok";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
   
  
   
   
?>
