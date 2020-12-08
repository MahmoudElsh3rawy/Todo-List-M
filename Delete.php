<?php
include_once("config.php");
include_once("CreatDBandTabels.php");
$id= $_GET['id'];
$result=mysqli_query($conn,"DELETE FROM  tasks_table WHERE id=$id");
header("Location:index.php");
?>