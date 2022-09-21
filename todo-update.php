<?php
include('./db_config.php');
   
if($_SERVER['REQUEST_METHOD'] === "POST")
    {
         $item = $_POST['items'];
         $id = $_POST['id'];
         $conn->query("UPDATE todo_list SET items = '$item' WHERE id = '$id'");

         header('location: ./todo.php');

        

    }
    else{
        echo "error";
    }

?>
