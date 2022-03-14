<!DOCTYPE html>
<html>
<head>
<title>sej side</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigations bar -->
<nav>
<div class="topnav">
<div class="logo"><a href="index.php">DINOGAMING</a></div>
<div class="item"><img src="media/basket.svg"></div>
</div>
</nav>
<div class="main-container">
<div class="main-container-row">
<div style="background-size: 600px; background-image: url('media/atomic-rocket.png');" class="sub-container">
	<div class="sub-container-text">
	<h1>ATOMIC ROCKET</h1><br>
	<p>Nok måske den stærkeste gaming computer på denne planet.</p>
	<a href="atomic-rocket.php" class="button">Køb her</a>
	</div>
</div>
<div style="background-size: 1000px; background-image: url('media/rocket-jumper.jpg');" class="sub-container">
	<div class="sub-container-text">
	<h1>ROCKET JUMPER</h1><br>
	<p>Den mest populære computer blandt Team Fortress 2 spillere.</p>
	<a href="rocket-jumper.php" class="button">Køb her</a>
	</div>
</div>
</div>
<div class="main-container-row">
	<div style="background-size: 1300px; background-image: url('media/atomic-watermelon.jpg');" class="sub-container">
	<div class="sub-container-text">
	<h1>ATOMIC WATERMELON</h1><br>
	<p>En gaming bærebar uden kompromis!</p>
	<a href="atomic-watermelon.php" class="button">Køb her</a>
	</div>
</div>
</div>

<?php
$connection = mysqli_connect("localhost", "sales", "@Chungus123");
if (!$connection) {
	die("fejl i mysql_connect\n");
} 
?>
</body>
</html>
