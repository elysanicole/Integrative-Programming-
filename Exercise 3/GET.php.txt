<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Application</title>
	<style>
		body { font-family: Arial, sans-serif; }
		.container {
			width: 50%;
			margin: 40px auto;
			padding: 20px;
			background-color:pink;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Welcome to Our Application!</h1>
		
		<?php
			// Check kung may GET parameter na 'name'
			if (isset($_GET['name']) && !empty($_GET['name'])) {
				$name = htmlspecialchars($_GET['name']); // sanitize para safe
			} else {
				$name = "ELYSA"; // default value
			}

			echo "Hello, my name is $name!<br>";
		?>
		
		<!-- Optional form para mag-test ng GET method -->
		<form method="get" action="">
			<label for="name">Enter your name:</label>
			<input type="text" name="name" id="name" required>
			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>
