<?php
    include_once("config.php");
    $id= $_GET['id'];
    $sql= mysqli_query($conn,"ALTER TABLE tasks_table AUTO_INCREMENT =1");
    $result=mysqli_query($conn,"DELETE FROM  tasks_table WHERE id=$id");
    header("Location:index.php");
?>