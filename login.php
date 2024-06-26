<?php 

$username = $_POST["useranme"];
$password = $_POST["password"];

$host="localhost";
$uname="root";
$pass="";
$db="sdac3";

$conn=mysqli_connect($host,$uname,$pass,$db);

if (!$conn) {
   echo"database not connected" . mysqli_connect_error();
} 

$sql="select * From";

$result=mysqli_query($conn,$sql);

if (mysqli_query($conn,$sql)) {
    header("location:index.html");
  
} else {
    header("location:error.html");
}

mysqli_close($conn);

?>