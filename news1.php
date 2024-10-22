<?php

include "adminconnect.php";

$ID = $_GET['ID'];
// echo $ID;

$sql = "SELECT * FROM   images  WHERE ID = $ID ";
$result = mysqli_query ($con, $sql);

$row = mysqli_fetch_assoc($result);

$header = $row['header'];
$imageURL = 'images/'.$filename = $row['filename'];
$content = $row['content'];
$DateTime = $row['DateTime'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="news-style.css?v=<?php echo time(); ?>">
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

	<div class="bodybg">

        <div class="mainScreen">
            <h1>BALITA NG KATOTOHANAN</h1>
        <h2> BOSES PARA SA BAYAN</h2>
    </div>

    <div id="image">
        <img src="sample/0.jpg" >
       </div>

    <div class="content">
        <div class="date">
            <h2>Posted <?php echo $DateTime; ?></h2>
            <h2>By: @breakingnews</h2>
        </div>
        <div class="summary">
            <h1><?php echo $header; ?></h1>
            <!-- <h1>Dahil sa init! 28 pampublikong eskwelahan sa Muntinlupa, magpapatupad ng blended learning</h1> -->
            <center><img src="<?php echo $imageURL; ?>"></center>
        </div>

        <div class="headlines">
            <h1>Headline</h1>
            <p><?php echo $content; ?></p>
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
