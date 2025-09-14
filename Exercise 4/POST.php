<!DOCTYPE html>
<html>
<head>
	<title>Our Team</title>
	<style>
		body { 
			font-family: Arial;
			background-color: #2e2e1f;
			color:Blue;
		}
		.container {
			display: flex;
			justify-content: center;
			gap: 20px;
			margin: 40px auto;
			flex-wrap: wrap;
		}
		.card {
			width: 300px;
			background-color: pink;
			border-radius: 15px;
			padding: 20px;
			text-align: center;
		}
		.profile-pic {
			width: 120px;
			height: 120px;
			border-radius: 50%;
			object-fit: cover;
			border: 3px solid #444;
		
		}
		h2 { margin: 10px 0 5px 0; }
		p { font-size: 14px; color: #444; }
		.socials a {
			margin: 5px;
			padding: 8px 12px;
			border-radius: 8px;
			color: white;
			font-size: 14px;
		}
		.facebook { background-color: #3b5998; }
		form { margin-top: 10px; }
		input, button {
			padding: 5px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<h1 style="text-align:center; color:white;">Welcome to Our Group!</h1>

	<?php
	// Default values
	$kim_name = "Kim Bryan Cabubas";
	$kim_quote = "Don't stop doing what is right in the eyes of the Lord.";

	$juliean_name = "Juliean Dela Cruz";
	$juliean_quote = "Learn something new everyday is a new opportunity to learn and grow.";

	$elysa_name = "Elysa Nicole Barros";
	$elysa_quote = "Chasing knowledge with the same passion I chase sunsets.";

	// GET for all
	if (isset($_GET['kim_name'])) { $kim_name = htmlspecialchars($_GET['kim_name']); }
	if (isset($_GET['juliean_name'])) { $juliean_name = htmlspecialchars($_GET['juliean_name']); }
	if (isset($_GET['elysa_name'])) { $elysa_name = htmlspecialchars($_GET['elysa_name']); }


	// POST for all
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (!empty($_POST['kim_quote'])) { $kim_quote = htmlspecialchars($_POST['kim_quote']); }
		if (!empty($_POST['juliean_quote'])) { $julian_quote = htmlspecialchars($_POST['juliean_quote']); }
		if (!empty($_POST['elysa_quote'])) { $elysa_quote = htmlspecialchars($_POST['elysa_quote']); }
	}
	?>

	<div class="container">
		<!-- Card 1: Kim -->
		<div class="card">
			<img src="kim.jpg" alt="Kim" class="profile-pic">
			<h2><?php echo $kim_name; ?></h2>
			<p>“<?php echo $kim_quote; ?>”</p>
			<div class="socials">
				<a href="https://facebook.com/" class="facebook" target="_blank">Facebook</a>
			</div>
			<!-- GET Form -->
			<form method="get" action="">
				<input type="text" name="kim_name" placeholder="Change name (Kim)">
				<button type="submit">Update (GET)</button>
			</form>
			<!-- POST Form -->
			<form method="post" action="">
				<input type="text" name="kim_quote" placeholder="Change quote (Kim)">
				<button type="submit">Update (POST)</button>
			</form>
		</div>


		<!-- Card 2: Juliean -->
		<div class="card">
			<img src="juliEan.jpg" alt="Julian" class="profile-pic">
			<h2><?php echo $juliean_name; ?></h2>
			<p>“<?php echo $juliean_quote; ?>”</p>
			<div class="socials">
				<a href="https://facebook.com/" class="facebook" target="_blank">Facebook</a>
			</div>
			<!-- GET Form -->
			<form method="get" action="">
				<input type="text" name="juliean_name" placeholder="Change name (Juliean)">
				<button type="submit">Update (GET)</button>
			</form>
			<!-- POST Form -->
			<form method="post" action="">
				<input type="text" name="juliean_quote" placeholder="Change quote (Juliean)">
				<button type="submit">Update (POST)</button>
			</form>
		</div>


		<!-- Card 3: Elysa -->
		<div class="card">
			<img src="elysa.jpg" alt="Elysa" class="profile-pic">
			<h2><?php echo $elysa_name; ?></h2>
			<p>“<?php echo $elysa_quote; ?>”</p>
			<div class="socials">
				<a href="https://facebook.com/" class="facebook" target="_blank">Facebook</a>
			</div>
			<!-- GET Form -->
			<form method="get" action="">
				<input type="text" name="elysa_name" placeholder="Change name (Elysa)">
				<button type="submit">Update (GET)</button>
			</form>
			<!-- POST Form -->
			<form method="post" action="">
				<input type="text" name="elysa_quote" placeholder="Change quote (Elysa)">
				<button type="submit">Update (POST)</button>
			</form>
		</div>
	</div>
</body>
</html>
