<center><br><br><br>
<?php

require 'config.php';


$name =mysqli_real_escape_string($link,$_POST['name']) ;
$email =mysqli_real_escape_string($link,$_POST['email']) ;
$message =mysqli_real_escape_string($link,$_POST['message']) ;
$sql = "INSERT INTO contact (name,email,message)
 VALUES ('$name','$email','$message')";
 if (mysqli_query($link, $sql)) {
    echo "Your Message is Successfully submitted ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

?>
</center>
<html>
<head>
<title>JUW food </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>
 <br>
 <center><a  href="home.php"  role="button" class="btn btn-success ">Back to </a></center>

</body>