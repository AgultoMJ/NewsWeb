<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="category.css">
</head>
<body>
	<div class="header">
		<h1 style=" color: rgb(200, 210, 249);"> VOICE OF THE PEOPLE</h1>
	</div>

	<div class="topnav">
		<a href="home.php">Home</a>
		<a href="sports.php">Sports</a>
		<a href="health.php">Health</a>
		<a href="politic.php">Politics</a>
		<a href="showbiz.php">Showbiz</a>
		<a href="business.php">Business</a>
		<a href="weather.php">Weather</a>
	</div>

	<div class="bgbg">

<div class="inside">

	<?php 
	// Include the database configuration file
	include 'adminconnect.php';

	// Get images from the database
	$sql = "SELECT * FROM images WHERE category = 'politic' ORDER BY DateTime DESC ";
	$result = mysqli_query($con, $sql);
	

	if ($result){
		while($row = mysqli_fetch_assoc($result)){
			$filename = $row['filename'];
			$header = $row['header'];
			$ID = $row['ID'];
			$imageURL = 'images/'.$filename = $row['filename'];

			echo 
			'<div id="container">
			<a href="news1.php?ID='.$ID.'">
				<div id="image">
					<img src="'.$imageURL.'">
				</div>
				<div id="description">
					<h3>'.$header.'</h3>
				</div>
			</a>
		</div>';
		}
	}



?>

	
	</div>
	</div>







	<div class="footer">
		<p>&copy Alright Reserved | 2023 |</p>
		<a href="aboutus.html">| About Us |</a>
		<a href="privacy.html">| Privacy |</a>
		<a href="concern.php">| If You Have Concern |</a>
	</div>


</body>
</html>