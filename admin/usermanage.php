<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>

    <div class=border border-dark border-5 p-5 my-5>
      <center><h1>User Management</h1></center>

      <?php 
      
      include "connection.php";
      $sql="select * from `users`";
      $result=mysqli_query($conn,$sql);
      if (mysqli_num_rows($result)>0) {
        echo"<div
        class='table-responsive p-2'
      >
        <table
          class='table table-primary table-bordered '
        >
          <thead>
            <tr>
              <th scope='col'> Id</th>
              <th scope='col'>Name</th>
              <th scope='col'>Email</th>
              <th scope='col'>Number</th>
              <th scope='col'>Query</th>
              <th scope='col'>Action</th>
            </tr>
          </thead>
          <tbody>";

        while ($users =mysqli_fetch_assoc($result)) {
          echo" <tr class=''>
          <td scope='row'>$users[id]</td>
          <td>$users[name]</td>
          <td>$users[email]</td>
          <td>$users[contact]</td>
          <td>$users[query]</td>
          <td><a class='btn btn-primary' href='editform.php?id=$users[id]' role='button'>Edit</a>
          <a class='btn btn-danger' href='delete.php?uid=$users[id]' role='button'>Delete</a></td>
        </tr>";
        }

        echo"  </tbody>
        </table>
      </div>";
      } else {
        echo"0 record found";
      }
      
      
      ?>
    </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>



