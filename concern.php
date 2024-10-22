<?php
require_once "concernDB.php";

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$concern = mysqli_real_escape_string($conn, $_POST['concern']);
	

	$sql = "INSERT INTO concerndb (name,email,concern) VALUES ('$name','$email','$concern')";

	if ($result = mysqli_query($conn,$sql))
		{
			echo "<script type='text/javascript'>alert('Concern successfully Sent!');
		window.location='home.php';
		</script>";
		}
	else
		{
			echo "Failed Attempt";
		}
}

?>
	
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Concern</title>
	<link rel="stylesheet" type="text/css" href="concern.css">
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-offset-2">
				<div class="page-header">
		</div>
			<center><p>Please fill all fields in the form</p>
			<form method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="" maxlength="50" required="">
				</div>
				<div class="form-group ">
					<label>Email</label>
					<input type="email" name="email" class="form-control" value="" maxlength="30" required="">
				</div><br><br>
				<div class="form-group">
					<label>Tell Us Your Concern</label>
					<input type="text" name="concern" class="form-control" value="" maxlength="50" required="">
				</div><br>
					<input type="submit" class="btn btn-primary" name="submit" value="submit">
		</form>
	</div></center>
</div>    
</div>
</body>
</html>