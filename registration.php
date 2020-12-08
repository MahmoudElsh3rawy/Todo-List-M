
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Registration</title>
    
</head>
<body>

<form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        username
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        password
        <input type="password" class="login-input" name="password" placeholder="password"required>
        
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    require('index.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])&& isset($_REQUEST['password']) ) {
        // removes backslashes
         //$username = stripslashes($_REQUEST['username']);
         //escapes special characters in a string
        //$username = mysqli_real_escape_string($_POST['username']);
        //$password = stripslashes($_REQUEST['password']);
       // $password = mysqli_real_escape_string($_POST['password']);
         $username = $_POST['username'];
         $password= $_POST['password'];
         echo($username);
         echo ($password);
      
        $query    =  "INSERT INTO users_table (username,userPassword) VALUES ('$username','$password')";
        //var_dump($query);
        $result   = mysqli_query($conn, $query);
        
        if ($result ) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
?>
</body>
</html>
