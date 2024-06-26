<?php 

include "connection.php";

$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["contact"];
$query=$_POST["query"];


$sql = "
UPDATE `users` SET `name` = '$name', `email` = '$email', `contact` = '$number', `query` = '$query' WHERE `users`.`id` = $id;";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "updated";
    header ("location:usermanage.php");
} else {
    echo "something went wrong";
}

mysqli_close($conn);
?>