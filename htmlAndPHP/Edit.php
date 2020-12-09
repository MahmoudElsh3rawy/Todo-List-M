<?php
include_once("config.php");
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$task=$_POST['task'];
	$result = mysqli_query($conn, "UPDATE tasks_table SET task='$task' WHERE id=$id");
	header("Location: ToDo.php");
}

	$id = $_GET['id']; 
	$result = mysqli_query($conn, "SELECT * FROM tasks_table WHERE id=$id"); 
	$user_data = mysqli_fetch_array($result);
	$task = $user_data['task'];

?>
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
          <a href='Home.php' class="button2">Home</a>
          <a href='logout.php' class="button1">Logout</a>
      </div>

    <div class="container">
      <div class="heading">
        <img class="heading__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/756881/laptop.svg">
        <h1 class="heading__title">To-Do List</h1>
      </div>
        <form name="update_user" method="post" action="Edit.php">
        <div>
          <label class="form__label" for="todo">~ Today I need to ~</label>
          <input class="form__input"
               type="text" 
               id="todo" 
               name="task"
               size="30"
               required
               value="<?php echo $task ?>"
               >
            <input type="hidden" name="id" value="<?php echo $id ?>">
          <button name="update" class="button"><span>Update</span></button>
        </div>
      </form>
      <script src="../js/scriptT.js"></script>
      <script>var ie9 = false;</script>
      <script src="../js/main.js"></script>
</body>
</html>