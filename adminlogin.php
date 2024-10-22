<?php
	session_start();
	include "adminconnect.php";
	if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = stripcslashes($email);
	$email = mysqli_real_escape_string($con,$email);

	$password = stripcslashes($password);
	$password = mysqli_real_escape_string($con,$password);

	$sql = "SELECT * FROM adminlogin WHERE email = '$email' and password = '$password'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
			echo "<script type='text/javascript'>alert('Log in successfully!');
		window.location='admin.php';
		</script>";
	} 
	
	else {
		echo "failed";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="concern.css">
</head>
	<body>
		<h2 style="margin-top: 50px;color: yellow;"><center>Log In</center></h2>
			<div class="Front">
			<div class="container"><br><br>	
				<h3 style="color: pink;"><center>Please fill all fields in the form</center></h3><br><br>		

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group ">
				<center><label>Email</label>
				<input type="email" name="email" class="form-control" value="" maxlength="30" required=""></center><br>	
				<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
			</div>

			<div class="form-group">
				<center><label>Password</label>
				<input type="password" name="password" class="form-control" value="" maxlength="8" required="" style="width: 470px;"></center><br>	
				<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
			</div> 

				<center><input type="submit" class="btn btn-primary" name="login" value="submit" style="width: 100px;background-color: yellow;"></center>
				
		</form>
		</div>
	   
	</div>
</body>
</html>