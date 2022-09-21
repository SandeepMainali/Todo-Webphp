<?php
    include('./db_config.php');

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $todo_item = $_POST['todo'];
        
        $result = $conn->query("INSERT INTO todo_list(`items`) VALUES('$todo_item')");

        header('location: ./todo.php');


    }

    elseif($_SERVER['REQUEST_METHOD'] === "GET"){
        $id = $_GET['id'];

        // print_r($id);
        $conn->query("DELETE FROM todo_list WHERE id='$id'");
        header('location: ./todo.php');


    }
    else{
      echo "error";
    }

    
?>
<!-- UPDATE `todo_list` SET `items` = 'Go to Rainas' WHERE `todo_list`.`id` = 8; -->

