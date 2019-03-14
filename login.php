<?php
	include "Include/script.inc.php";
	include "Include/dbConfig.php";
	$msg = '';
	$msg2 = '';
	$email = '';
	if(isset($_POST['submit']))
	{
		$email = $_POST['mail'];
		$password = $_POST['pass'];
		if(empty($email))
		{
			$msg='<div class="error">Please enter Email</div>';
		}
		else if(empty($password))
		{
			$msg2='<div class="error">Please enter Password</div>';
		}
		/* else if(email_exists($email, $conn))
		{
			$pass = mysqli_query($conn. "SELECT passwords FROM users WHERE mail='$email'");
			$pass_w = mysqli_fetch_array($pass);
			$dbpass = $pass_w['password'];
			$password = md5($password);
			if ($password !== $dbpass)
			{
					$msg='<div class="error">Password is Wrong</div>';
			}
			else
			{
				echo "You are logged in ";
				header("location:profile.php");
			}
		}
		else
		{
			$msg = '<div class="error">Email does not Exists</div>';
		}
		*/
	}
?>
<title>Login Form</title>
<style type="text/css" media="screen">
	.error{
		color:red;
		}
</style>
</head>
<body>
<div class="container">
	<div class="login-form col-md-6 offset-md-4">
		<div class="jumbotron" style='margin-top:50px; padding-top:20px; padding-bottom: 20px;'>
			<h2 align='center'>Login Form</h2><br>
			<form method="POST">
				<div class="form-group">
					<label>Email : </label>
					<input type="email" name="mail" class="form-control" value="<?php echo $email; ?>" />
					<?php echo $msg; ?>
				</div>
				<div class="form-group">
					<label>Password : </label>
					<input type="password" name="pass" class="form-control" />
					<?php echo $msg2; ?>
				</div>
				<div class="form-group">
					<input type="checkbox" name="check" />
					Keep Me Logged In
				</div>
				
				<div class="form-group">
					<center><input type="submit" name="submit" value="Login" class="btn btn-success btn-block"></center>
				</div>
			</form>
		</div>
	</div>
</div>
</body>