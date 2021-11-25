<?php 
$servername = "db";
$username = "root" ;
$password = "123456";
$dbname = "taonudb";

$conn = mysqli_connect($servername, $username, $password, $dbname );

if (!$conn) {
  die("connection faild" . mysqli_connect_error());

}

?>