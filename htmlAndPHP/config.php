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
    $sql = "CREATE DATABASE if not exists TODO_LIST_DB";
    // if ($conn->query($sql) === TRUE) {
    //   echo "Database created successfully";
    // } else {
    //   echo "Error creating database: " . $conn->error;
    // }
    $usedb = "USE TODO_LIST_DB;";
    $runusedb = $conn->query($usedb);
    if($runusedb){
        //echo "  used  ";
    }else{
    echo $conn->error;
    };
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS users_table (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL ,
    userPassword VARCHAR(30) Not Null,
    email VARCHAR(30) Not Null unique
    )";
  
    // if (mysqli_query($conn, $sql)) {
    //   echo "Table users_table created successfully <br>";
    // } else {
    //   echo "Error creating table  1  : " . mysqli_error($conn);
    // }
  
  
    $sql = "CREATE TABLE IF NOT EXISTS tasks_table (
        id INT(6)  AUTO_INCREMENT PRIMARY KEY,
        task text(30) NOT NULL,
        userid int not null,
        FOREIGN KEY (userid) REFERENCES users_table(id)
      
        )";
        
        // if (mysqli_query($conn, $sql)) {
        //   echo "Table tasks_table created successfully";
        // } else {
        //   echo "Error creating table: " . mysqli_error($conn);
        // }
  
?>