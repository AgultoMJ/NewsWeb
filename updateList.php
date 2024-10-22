<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1 style="color: rgb(200, 210, 249);"> VOICE OF THE PEOPLE</h1>
	</div>

	 <div class="topnav">
        <a href="admin.php">Upload</a>
        <a href="updateList.php">Update</a>
        <a href="delete.php">Delete</a>
    </div>

	<!-- background sa taas -->
	<div class = "backgroundimg">
		<span id = "time"></span>
		<video autoplay loop muted id = "myVideo" >
			<source src="sample/AAA.mp4" type="video/mp4">
		</video>
	</div>

	<div class="latestnews">
		<h2 style="color: rgb(253, 253, 253);">News List</h2>
	</div>
	<!-- background ng kabuuan -->

	<div class="bgbg">

	<?php 
	// Include the database configuration file
	include 'adminconnect.php';

	// Get images from the database
	$sql = "SELECT * FROM images ORDER BY DateTime DESC";
	$result = mysqli_query($con, $sql);
	

	if ($result){
		while($row = mysqli_fetch_assoc($result)){
			$filename = $row['filename'];
			$header = $row['header'];
			$ID = $row['ID'];
			$imageURL = 'images/'.$filename = $row['filename'];

			echo 
			'<div id="container">
			<a href="update.php?ID='.$ID.'">
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

		
	




	<div class="footer">
		<p>&copy Alright Reserved | 2023 |</p>
		<a href="aboutus.html">| About Us |</a>
		<a href="privacy.html">| Privacy |</a>
		<a href="concern.php">| If You Have Concern |</a>
		
	</div>



	<!------------- para sa live time  --------------------->
	<script type="text/javascript">
	function refreshTime() {
	  const timeDisplay = document.getElementById("time");
	  const dateString = new Date().toLocaleString();
	  const formattedString = dateString.replace(", ", " - ");
	  timeDisplay.textContent = formattedString;
	}
	  setInterval(refreshTime, 1000);

	</script>
</body>
</html>