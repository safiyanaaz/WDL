<!Doctype html>
<?php session_start(); ?>
<html>
<head>
	<title> Login Page</title>
	<style type="text/css">
	    .log>h3{
	    	text-align: center;

	    }
		#login-box{
			width:25%;
			margin: 7em auto;
			border: 1px solid black;
			padding: 10px;
			border-radius: 25px;
			background-color: white;
		}
		#login-box>input{
			display: block;
			width: 90%;
			margin: 0 auto;
			margin-bottom: 10px;
			border-radius: 40px;
			width: 300px;
		}

		#login-box>h5{
			text-align: center;
		}
	</style>

</head>
<body>
<?php
	if($_POST){
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		if($username=='safu' && $pass=="2345")
		{
			echo '<span>Login Sucessful!
				You will be redirected to blog page</span>';
				$SESSION['user']=$username;
				$SESSION['college']="AIKTC";
				$SESSION['class']="TE";
				$SESSION['batch']="B3";
				header("Refresh:3, url='blog.php'");
		}
		else{
			echo '<span>Incorrect username or password</span>';
		}
	}
	?>

	<form method="post" action="log.php">
	<div id="login-box" class="log">
		<h3>Login</h3>
		<h5>Username</h5><br>
		<input type="text" name="username" id="username" placeholder="Username" required="required"/>
		<h5>Password</h5><br>
		<input type="password" name="pass" id="pass" placeholder="Password" required="required"/><br>
		<input type="submit" value="Login"/>
	</div>
	</form>
</body>
</html>