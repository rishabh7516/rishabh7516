<?php 

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$host="localhost";
$uname="root";
$pass="";
$db="sdac3";

$conn=mysqli_connect($host,$uname,$pass,$db);

if (!$conn) {
   echo"database not connected" . mysqli_connect_error();
} 

$sql="INSERT INTO `registration` (`id`, `name`, `username`, `email`, `password`) VALUES (NULL, '$name', '$username', '$email', '$password');";

if (mysqli_query($conn,$sql)) {
    echo "inserted";
    header("location:login.html");
  
} else {
  echo"something went wrong";
}

mysqli_close($conn);

?>