<?php 

include "connection.php";

$id=$_GET["uid"];

$sql="DELETE FROM `users` WHERE `id`=$id";

$result=mysqli_query($conn,$sql);

if ($result) {
    echo"Deleted";
    header("location:usermanage.php");
} else {
    mysqli_connect_error($conn);
}

mysqli_close($conn);

?>