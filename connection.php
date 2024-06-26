<?php 

$host="localhost";
$uname="root";
$pass="";
$db="sdac3";

$conn=mysqli_connect($host,$uname,$pass,$db);

if (!$conn) {
  echo"connection failed". mysqli_connect_error();
}

?>