<?php 

include "connection.php";

$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$query=$_POST["query"];




$sql = "INSERT INTO `users` (`id`, `name`, `email`, `contact`, `query`) VALUES (NULL, '$name', '$email', '$contact', '$query');";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "inserted";
    header("location:thankyou.html");
} else {
    echo "something went wrong";
}

mysqli_close($conn);

?>