<?php
    require('config.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username']) && isset($_REQUEST['password'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database


        //$username = $_POST['username'];
        //$password= $_POST['password'];
        echo($username);
        echo($password);
        $query    = "SELECT * FROM users_table WHERE username='$username'
                     AND userPassword='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        echo($rows);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:ToDo.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } 
?>
