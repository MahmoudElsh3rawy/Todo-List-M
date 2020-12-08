<html>
<head>
    <title>Home</title>
</head>

<body>
    <form action="Add.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Text</td>
                <td><input type="text" name="task"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
  </tr>
    <table width='80%'>
            <th align='left'>Tasks</th>
            <?php
                include_once("config.php");
                $sqlSelect = "SELECT * FROM tasks_table";
                $result = mysqli_query($conn, $sqlSelect) or die( mysqli_error($conn));
                while($tasks = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$tasks['task']."</td>";
                echo "<td><a href='Delete.php?id=$tasks[id]' style='color:red'>Delete </a>";
                echo" <a href='Edit.php?id=$tasks[id]'style='color:green'>Edit </a>
                 </td>";
               }
            ?>
        </tr>

    </table>
    <form method="POST" action="index.php">
        <input type="text" name="task">
        <input type="submit" name="submit" value="search">
    </form>
        <?php
        include_once("config.php");
        if (isset($_POST['submit'])&& isset($_POST['task']) && ! empty($_POST['task']))
        {
            $task=$_POST['task'];
            $sql="SELECT task FROM `tasks_table` WHERE task LIKE '$task%'";
            $result=mysqli_query($conn, $sql);
            echo"Last Search ... <br>";
            if (!$tasks = mysqli_fetch_array($result))
            {echo "<label style='color:red'>No Taska were found with you search <label>";}
            while($tasks = mysqli_fetch_array($result)) {
                echo $tasks['task']."<br>";}
            
        }
        ?>

</body>
</html>