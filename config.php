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
  $sql = "CREATE DATABASE if not exists ToDoList";
  if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  $usedb = "USE todo_list_db;";
  $runusedb = $conn->query($usedb);
  $sqlUsres="CREATE TABLE IF NOT EXISTS users_table (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(30) NOT NULL)";
  if (mysqli_query($conn, $sqlUsres)) {
      //echo "Table users_table created successfully <br>";
    } else {
      echo "Error creating table  1  : " . mysqli_error($conn);
    }
  $sqlTasks="CREATE TABLE IF NOT EXISTS tasks_table (
      id INT(6)  AUTO_INCREMENT PRIMARY KEY,
      task text(30) NOT NULL,
      userid int NOT NULL,
      FOREIGN KEY (userid) REFERENCES users_table(id)
      )";
  if (mysqli_query($conn, $sqlTasks)) {
  //echo "Table tasks_table created successfully";
  } else {
  echo "Error creating table: " . mysqli_error($conn);
  }
  $sql = "CREATE DATABASE if not exists ToDoList";
  if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  $usedb = "USE todo_list_db;";
  $runusedb = $conn->query($usedb);
  $sqlUsres="CREATE TABLE IF NOT EXISTS users_table (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(30) NOT NULL)";
  if (mysqli_query($conn, $sqlUsres)) {
      //echo "Table users_table created successfully <br>";
    } else {
      echo "Error creating table  1  : " . mysqli_error($conn);
    }
  $sqlTasks="CREATE TABLE IF NOT EXISTS tasks_table (
      id INT(6)  AUTO_INCREMENT PRIMARY KEY,
      task text(30) NOT NULL,
      userid int NOT NULL,
      FOREIGN KEY (userid) REFERENCES users_table(id)
      )";
  if (mysqli_query($conn, $sqlTasks)) {
  //echo "Table tasks_table created successfully";
  } else {
  echo "Error creating table: " . mysqli_error($conn);
  }
?>
