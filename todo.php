<?php
  include('./db_config.php');
  
  // $sql="SELECT * FROM todo_list";
  $result = $conn->query("SELECT * FROM todo_list");

  // //numeric detail from database
  // echo "<pre>";
  // print_r($result);
  // echo "</pre>";

  // $data = $result->fetch_assoc();
  // print_r($row);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3">
    <h2 class="text-center">Todo Application</h2>

    <form action="save_todo.php" method="post" >
        <input type="text" name="todo" class="form-control mt-5 " placeholder="Enter Your List Here">
        <button type="submit" class="btn btn-primary mt-2">Add Item</button>
    </form>


    <table class="table table-striped mt-5">
    <thead>
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Todo Items</th>
            <th scope="col">Action</th>
         </tr>
    </thead>
    <tbody>
          <?php
              while($row = $result->fetch_assoc())
              {?>
                  <tr>
                    <th><?php echo $row['id']?></th>
                    <td><?php echo $row['items']?></td>
                    <td scope="col"><a href="save_todo.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    <td scope="col"><a href="update.php?id=<?php echo $row['id']; ?> &item=<?php echo $row['items'];?>" class="btn btn-success">Update</a></td>
                  </tr>
                

              <?php
              }
          ?>

        
    </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  </body>
</html>
