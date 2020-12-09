<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleT.css" type="text/css" media="screen"/>
    <title>To Do List</title>
    <link rel="icon" href="../image/social-foursquare-black.png" type="image/gif" sizes="16x16">
    

</head>
<body >  
        <div>
            <a href='logout.php' class="button1">Logout</a>
      </div>
    <div class="container">
      <div class="heading">
        <img class="heading__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/756881/laptop.svg">
        <h1 class="heading__title">To-Do List</h1>
      </div>
      <form name="update_user" method="post" action="Add.php">
        <div>
          <label class="form__label" for="todo">~ Today I need to ~</label>
          <input class="form__input"
               type="text" 
               id="todo" 
               name="task"
               size="30"
               required>
          <button name="Submit" class="button"><span>Add Task</span></button>
        </div>
      </form>
      <div>
        <ul class="toDoList"> 
        <table width='80%'>
            <th align='left'>Tasks</th>
            <?php
                include_once("config.php");
                session_start();
                $x = $_SESSION['id'];
                $sqlSelect = "SELECT * FROM tasks_table Where userid = '$x'";
                $result = mysqli_query($conn, $sqlSelect) or die( mysqli_error($conn));
                while($tasks = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$tasks['task']."</td>";
                echo "<td style='text-align:right'><a href='Delete.php?id=$tasks[id]'> <img src='../image/Delete.png' width='20px'> </a>";
                echo" <a href='Edit.php?id=$tasks[id]''><img src='../image/edit_.png' width='20px'> </a> 
                    </td>";
                }
            ?>
        </tr>
        </table>
        <form method="POST" action="ToDo.php">
        <div>
        <br>
        <br>
          <label class="form__label" for="todo">~ Search in my To Do ~</label>
          <input class="form__input"
               type="text" 
               id="todo" 
               name="task"
               size="30"
               required>
          <button name="submit" class="button"><span> Search </span></button>
          <?php
            include_once("config.php");
            if (isset($_POST['submit'])&& isset($_POST['task']) && ! empty($_POST['task']))
            {
                $task=$_POST['task'];
                $sql="SELECT task FROM `tasks_table` WHERE userid = '$x' and task LIKE '$task%'";
                $result=mysqli_query($conn, $sql);
                echo" <br>Last Search ... <br>";
                while($tasks = mysqli_fetch_array($result)) {
                    echo $tasks['task']."<br>";}
                
            }
        ?>
        </div>
        </form>
        </ul>
      </div>
    </div>
      <script src="../js/scriptT.js"></script>
      <script>var ie9 = false;</script>
      <script src="../js/main.js"></script>
</body>
</html>