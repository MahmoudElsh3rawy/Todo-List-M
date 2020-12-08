<?php
include_once("config.php");
include_once("CreatDBandTabels.php");
$task= $_POST['task'];
$sql = "SELECT task from tasks_table where name LIKE '$task%'"; 
    $result  = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
    {
        echo "<p>".$row['task']."</p>";
    
    }

?>