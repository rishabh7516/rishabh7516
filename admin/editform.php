<?php 
$id=$_GET["id"];

include "connection.php";

$sql="SELECT * FROM `users` WHERE `id`=$id;";

$result=mysqli_query($conn,$sql);

$users=mysqli_fetch_assoc($result);

?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container border border-dark border-5 p-5 my-5" >

    <center><h1>Edit Form</h1></center>
    <form action="update.php" method="post">

    <div class="mb-3">
      <input type="text"
        class="form-control" name="id" id="" aria-describedby="helpId" placeholder=""<?php echo "value='$users[id]'";?>>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder=""<?php echo " value = '$users[name]'";?>>
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="text"
        class="form-control" name="email" id="" aria-describedby="helpId" placeholder=""<?php echo " value = '$users[email]'";?>>
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Number</label>
      <input type="text"
        class="form-control" name="contact" id="" aria-describedby="helpId" placeholder=""<?php echo " value = '$users[contact]'";?>>
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Query</label>
      <input type="text"
        class="form-control" name="query" id="" aria-describedby="helpId" placeholder=""<?php echo " value = '$users[query]'";?>>
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>       
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>



