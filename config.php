<?php
    $userName="root";
    $password="";
    $host="localhost";
    $conn =new mysqli( $host , $userName , $password);
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
      }else{
       //echo "Connected successfully";
      }  
?>
