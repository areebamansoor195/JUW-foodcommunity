<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$user = 'root';         //Enter your username here by which you log into phpmyadmin jahan database bani hui hei tumhari
$password = '';    //Enter the password of phpmyadmin
$db = 'food';           //Enter the name of database
$host = '127.0.0.1:3306';   //**IMPORTANT STEP** Enter the name jahan tumhara mysql ka server chal raha hei along with **PORT NUMBER** this is very important. Mera port 8889 pr chal raha. Toh make sure you write 127.0.0.1:<your port number>


$link = mysqli_connect($host, $user, $password, $db);

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>