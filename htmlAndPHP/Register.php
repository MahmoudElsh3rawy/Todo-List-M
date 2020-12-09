<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleR.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css" media="all"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC%3A400%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&amp;ver=4.9.8"
		  type="text/css" media="screen"/>
	<link rel="stylesheet" href="../css/styleH.css" type="text/css" media="screen"/>
	<title>To Do List</title>
	<link rel="icon" href="../image/social-foursquare-black.png" type="image/gif" sizes="16x16">
    <script src='../js/jquery-3.0.0.min.js'></script>
    <script src='../js/jquery-migrate-3.0.1.min.js'></script>
</head>
<body class="home sticky-menu sidebar-off" id="top">
	<header class="header">
        <div class="header-wrap">
    
            <div class="logo plain logo-left">
                <div class="site-title">
                    <a href="Home.php" title="Go to Home">To Do List</a>
                </div>
            </div>
            <nav id="nav" role="navigation">
                <div class="table">
                    <div class="table-cell">
                        <ul id="menu-menu-1">
                            <li class="menu-item">
                                <a href="Home.php">Home</a></li>
                            <li class="menu-item">
                                <a href="Home.html#content">About Us</a></li>
                            <li class="menu-item">
                                <a href="Contact.html">Contact me</a></li>
                            <li class="menu-inline menu-item">
                                <a title="Git Hub" href="https://github.com/alikhaled17/TODO-LIST">
                                    <img class="siz_git" src="../image/social-github-black.png" alt="Git Hub">
                                    <i class="Git"></i><span class="i">Git Hub</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
<div class="Register" id="Register">
	<div class="form-Register sign-up-Register">
		<form action="#" class="form" action="" method="post" name="signUp">
			<h1>Create Account</h1>
			<div class="social-Register">
				<a href="https://www.facebook.com/" class="social"><img src="../image/social-facebook-black.png" alt="facebook"><i class="facebook"></i></a>
				<a href="#" class="social"><img src="../image/social-twitter-black.png" alt="twitter-"><i class="twitter-"></i></a>
				<a href="https://www.linkedin.com/" class="social"><img src="../image/social-linkedin-black.png" alt="linkedin"><i class="linkedin"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="userName" />
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password"  name="Password"/>
			<button name="submit">Sign Up</button>
		</form>
		<?php
		include_once('config.php');
		if (isset($_REQUEST['userName'])&& isset($_REQUEST['Password'])&& isset($_REQUEST['email'])) {
			$username = $_POST['userName'];
			$password= $_POST['Password'];
			$email= $_POST['email'];
			echo($username);
			echo ($password);
			echo ($email);
		   $query    =  "INSERT INTO users_table (username,userPassword,email) VALUES ('$username','$password','$email')";
		   //var_dump($query);
		   $result   = mysqli_query($conn, $query);
		   
		   if ($result ) {
			//    echo "<div class='form'>
			// 		 <h3>You are registered successfully.</h3><br/>
			// 		 <p class='link'>Click here to <a href='login.php'>Login</a></p>
			// 		 </div>";
		   } else {
			   echo "<div class='form'>
					 <h3>Required fields are missing.</h3><br/>
					 <p class='link'>Click here to <a href='Register.php'>registeration</a> again.</p>
					 </div>";
		   }
	   }
	   
		?>
	</div>
	<div class="form-Register sign-in-Register">
		<?php
			include_once("login.php");
		?>
		<form class="form" method="post" name="login">
			<h1>Sign in</h1>
			<div class="social-Register">
				<a href="https://www.facebook.com/" class="social"><img src="../image/social-facebook-black.png" alt="facebook"><i class="facebook"></i></a>
				<a href="#" class="social"><img src="../image/social-twitter-black.png" alt="twitter-"><i class="twitter-"></i></a>
				<a href="https://www.linkedin.com/" class="social"><img src="../image/social-linkedin-black.png" alt="linkedin"><i class="linkedin"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="User Name" name="username" autofocus="true" />
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button name="login" type="submit" >Sign In</button>
		</form>

	</div>
	<div class="overlay-Register">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<footer class="footer">
    <div class="footer-wrap">
        <div id="footer-text">&copy; 2020 To Do List.
            Designed by <a target="_blank">Team B</a>.</div>

        <a href="#top" id="btt">Top <i class="fa fa-chevron-up"></i></a>
    </div>

<script src="../js/Script.js"></script>
<script>var ie9 = false;</script>
<script src="../js/main.js"></script>
</body>
</html>
