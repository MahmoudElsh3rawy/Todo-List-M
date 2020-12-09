<?php
    include_once("config.php");

    session_start();
    $x = $_SESSION['id'];
        if (isset($_POST['Submit'])&& isset($_POST['task']) && ! empty($_POST['task']))
        {
            $task = $_POST['task']; 
            $result = mysqli_query($conn,"INSERT INTO tasks_table (`task`,`userid`) VALUES ('$task','$x')");
            echo "<label style='color: green;'>User added successfully.</label>";                
        }
    header("Location:ToDo.php");
    
?>