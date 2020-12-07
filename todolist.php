
<?php
    // connect mysql
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todo_list";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    };
    // create database
    $sql = "CREATE DATABASE todo_list";
    $createDB = $conn->query($sql);
    if($createDB){
       echo "  database created  ";
    }else{
         echo $conn->error;
         }

    // use database 

     $usedb = "USE todo_list;";
     $runusedb = $conn->query($usedb);
     if($runusedb){
         echo "  used  ";
     }else{
    echo $conn->error;
     };
          // create table and insert values 
     $table="CREATE TABLE `users_table`(
        `user_id` int(11) NOT NULL auto_increment,
        `name` varchar(100) NOT NULL,
        `password` varchar(100)  NOT NULL,  
         PRIMARY KEY  (`user_id`)
      );";
                
     $runtable = $conn->query($table);
     if($runtable){
         echo "created table";
     }else{
         echo $conn->error;
     }

     $insertvalues = "INSERT INTO users_table(name, password ) values ('turki', '123456');";
  $runsql = $conn->query($insertvalues);
  if ($runsql){
      echo "inserted";
  }else{
      $conn->error; };

      
     $table2="CREATE TABLE `tasks_table`(
        `task_id` int(11) NOT NULL auto_increment,
        `task` text (100) NOT NULL,
         PRIMARY KEY  (`task_id`),
         FOREIGN KEY (`user_id`)
      );";
  $runtable = $conn->query($table2);
  if($runtable){
      echo "created table";
  }else{
      echo $conn->error;
  }




  $insertvalues = "INSERT INTO users_table(name, password ) values ('turki', '123456');";
  $runsql = $conn->query($insertvalues);
  if ($runsql){
      echo "inserted";
  }else{
      $conn->error; };


    