<?php
	session_start();
	include "Include/script.inc.php";
	include "Include/dbConfig.inc.php";
	$msg = '';
	$msg2 = '';
	$username = '';
	if(isset($_POST['submit']))
	{
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		if(empty($username))
		{
			$msg='<div class="error">Please enter Username</div>';
		}
		else if(empty($password))
		{
			$msg2='<div class="error">Please enter Password</div>';
		}
		else
		{
			$pass = mysqli_query($conn, "SELECT password FROM admin WHERE name='$username'");
			$pass_w = mysqli_fetch_array($pass);
			$dbpass = $pass_w['password'];
			if ($password !== $dbpass)
			{
				$msg2='<div class="error">Password is Wrong</div>';
			}
			else
			{
			$_SESSION['name'] = $username;
			header("location:Dashboard/admin-panel.php");
			}
		}
	}
?>
<html>
	<head>
		<title>Admin Login</title>
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
					<h2 align='center'>Admin Login</h2><br>
					<form method="POST">
						<div class="form-group">
							<label>Username : </label>
							<input type="text" name="uname" class="form-control" value="<?php echo $username; ?>"/>
							<?php echo $msg; ?>
						</div>
						<div class="form-group">
							<label>Password : </label>
							<input type="password" name="pass" class="form-control" />
							<?php echo $msg2; ?>
						</div>
						
						<div class="form-group">
							<center><input type="submit" name="submit" value="Login" class="btn btn-success btn-block"></center>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>