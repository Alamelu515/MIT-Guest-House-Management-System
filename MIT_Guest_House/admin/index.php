<!DOCTYPE html>
<!--Index Page-->
<?php require_once "connect.php"?>
<html>
	<head>
		<title>MIT Guest House</title>
		<link rel="icon"  href="carousel/mit.jpeg">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<style>
			*
			{
				color:saddlebrown;
				font-family: Georgia, serif;
			}
			a:link,a:visited,a:hover,a:active
			{
				text-decoration: none;
				color:saddlebrown;
			}
		</style>	
	</head>
	<body class="bg-light" style="text-align:center; font-size:20px;">

		<div class="container py-5 col-md-4">
			<h1 class="mb-4">Administrator</h1><br>
			<form method = "POST">
				<div class = "form-group">
					<label>Username</label>
					<input type = "text" name = "username" class = "form-control" required = "required" />
				</div><br>
				<div class = "form-group">
					<label>Password</label>
					<input type = "password" name = "password" class = "form-control" required = "required" />
				</div><br><br>
				<div class = "form-group">
					<button name = "login" class = "form-control btn btn-dark text-light">Login</button>
				</div>
			</form>
		</div>

		<footer class="p-3" style="background-color:linen; text-align:right; position: absolute; bottom: 0; width: 100%;">
			<label>&copy; Copyright 2023 </label>
		</footer>
		
		<?php
			if(isset ($_POST['login']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
				$fetch = $query->fetch_array();
				$row = $query->num_rows;
				
				if($row > 0)
				{
					header('location:home.php');
				}
				else
				{
					echo "<center><label style = 'color:red;'>Invalid username or password</label></center>";
				}
			}
		?>
	</body>
</html>

