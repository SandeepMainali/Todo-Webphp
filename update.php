<?php
include('./db_config.php');
$id = $_GET['id'];
$item = $_GET['item'];
// echo "$item";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container p-3">
    <h2 class="text-center">Todo Application(Update list)</h2>

    <form action="todo-update.php" method="post">
    <table class="table table-striped-columns">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Todo item</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="text" value="<?php echo "$id" ?>" name="id" ></th>
      <td><input type="text" value="<?php echo "$item" ?>" name="items" ></td>
      <td><input type="submit" value="Update Data" class="btn btn-success" ></td>
    </tr>
  </tbody>
</table>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

