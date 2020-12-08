<?php
include_once("config.php");
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$task=$_POST['task'];
	$result = mysqli_query($conn, "UPDATE tasks_table SET task='$task' WHERE id=$id");
	header("Location: index.php");
}

	$id = $_GET['id']; 
	$result = mysqli_query($conn, "SELECT * FROM tasks_table WHERE id=$id"); 
	$user_data = mysqli_fetch_array($result);
	$task = $user_data['task'];

?>
<html>
<head>
	<title>Edit Task</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="Edit.php">
		<table>
			<tr>
				<td>Task</td>
				<td>
					<input type="text" name="task" value="<?php echo $task ?>" >
				</td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>