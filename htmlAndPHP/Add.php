<?php
    include_once("config.php");

        if (isset($_POST['Submit'])&& isset($_POST['task']) && ! empty($_POST['task']))
        {
            $task = $_POST['task']; 
            $result = mysqli_query($conn,"INSERT INTO tasks_table (`task`,`userid`) VALUES ('$task',1)");
            echo "<label style='color: green;'>User added successfully.</label>";                
        }
    header("Location:ToDo.php");
    
?>