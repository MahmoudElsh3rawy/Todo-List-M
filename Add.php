<?php
if(isset($_POST['Submit'])) {
    if (isset($_POST['task']))
        {
        $task = $_POST['task']; 
        include_once("config.php");
        include_once("CreatDBandTabels.php");
        $id= $_GET['id'];
        $result = mysqli_query($conn,"INSERT INTO tasks_table (`task`,`userid`) VALUES ('$task',1)");
        // echo "<label style='color: green;'>User added successfully.</label>";
        // }
        header("Location:index.php");
    }
?>

