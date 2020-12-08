<html>
<head>
    <title>Home</title>
</head>

<body>
<!-- <div>
    <label class="control-label" for="task">task</label>
    <input type="text" id="task" onKeyUp="name_suggestion()">
    <div id="suggestion"></div>
</div>
<script>
    function name_suggestion() {
      var name = document.getElementById("task").value; 
      xhr = new XMLHttpRequest();
      console.log(xhr, "xhr");
      var data = "task=" + task;  
      xhr.open("POST", "search.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send(data);
      xhr.onreadystatechange = display_data;
      function display_data() { 
            document.getElementById("suggestion").innerHTML = xhr.responseText;
      }
    }
  </script> -->
<form action="index.php" method="post" name="form1">
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
<?php
    include_once("config.php");
    include_once("CreatDBandTabels.php");
    if(isset($_POST['Submit'])) {
        if (isset($_POST['task']))
        {
            $task = $_POST['task']; 
            $result = mysqli_query($conn,"INSERT INTO tasks_table (`task`,`userid`) VALUES ('$task',1)");
            echo "<label style='color: green;'>User added successfully.</label>";                
        }
    }
    $sqlSelect = "SELECT * FROM tasks_table ORDER BY id ";
    $result = mysqli_query($conn, $sqlSelect) or die( mysqli_error($conn));
?>
    <table width='80%' border=1>
        <tr>
            <th>id</th> 
            <th>Tasks</th>
            <?php
               while($tasks = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$tasks['id']."</td>";
                echo "<td>".$tasks['task']."</td>";
                
                echo "<td><a href='Delete.php?id=$tasks[id]' style='color:red'>Delete </a>";
                echo" <a href='Edit.php?id=$tasks[id]'style='color:green'>Edit </a>
                 </td>";
               }
            exit;
            ?>

            
        </tr>

    </table>
</body>
</html>