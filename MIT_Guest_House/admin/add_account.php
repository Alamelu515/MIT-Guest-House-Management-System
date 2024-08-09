<!DOCTYPE html>
<!--To add account-->
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
	<body class="bg-light" >
		<div class="p-3" style="background-color:linen; display: flex; flex-direction: row; justify-content: space-between;">
			<div style="display:flex; flex-direction:row;">
				<img src="carousel/mit.jpeg" height="50px" width="50px" class="m-3">
				<p class="p-1" style="font-size:38px;"> MIT Guest House </p>
			</div>
			<div class="pt-4" style="font-size:20px;">
				<a href="home.php">Home</a>&emsp;
				<a href="account.php">Accounts</a>&emsp;
				<a href="reserve.php">Reservations</a>&emsp;
			</div>
		</div>

		<div class="container py-5">
			<h1 class="mb-5">Accounts / Create New Account</h1>
			<div class = "col-md-4" style="font-size:20px;">	
				<form method = "POST">
					<div class = "form-group">
						<label>Name </label>
						<input type = "text" class = "form-control" name = "name" />
					</div><br>
					<div class = "form-group">
						<label>Username </label>
						<input type = "text" class = "form-control" name = "username" />
					</div><br>
					<div class = "form-group">
						<label>Password </label>
						<input type = "password" class = "form-control" name = "password" />
					</div><br><br>
					<div class = "form-group">
						<button name = "add_account" class = "btn btn-dark text-light form-control">Save</button>
					</div>
				</form>
				<?php require_once 'add_query_account.php'?>
			</div>
		</div>

		<footer class="p-3" style="background-color:linen; text-align:right; position: fixed; bottom: 0; width: 100%;">
			<label>&copy; Copyright 2023 </label>
		</footer>

	</body>
</html>