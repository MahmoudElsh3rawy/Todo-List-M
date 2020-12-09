<?php
  $databaseHost = 'db4free.net:3306/todobditi';
  $database = 'todobditi'; 
  $databaseUsername = 'mayar1234';
  $databasePassword = 'mayar1234';
  global $conn;
  $conn = mysqli_connect($databaseHost, $databaseUsername,$databasePassword, $database);
   
?>