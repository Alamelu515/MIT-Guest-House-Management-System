<!DOCTYPE html>
<!--To check in a guest-->
<?php require_once 'connect.php';?>
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
	<body class="bg-light" style="font-size:20px;">
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
			<h1 class="mb-5">Fill up the form to check in</h1>
			<?php
				$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
				$fetch = $query->fetch_array();
			?>
			<form method = "POST" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
				<div class = "form-inline" style = "float:left;">
					<label>Firstname</label>
					<input type = "text" value = "<?php echo $fetch['firstname']?>" class = "form-control" size = "30" disabled = "disabled"/>
				</div>&emsp;
				<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label>Lastname</label>
					<input type = "text" value = "<?php echo $fetch['lastname']?>" class = "form-control" size = "30" disabled = "disabled"/>
				</div>&emsp;
				<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label>Room Type</label>
					<input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" size = "20" disabled = "disabled"/>
				</div>&emsp;
				<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label>Room Number</label>
					<input type = "number" min = "0" max = "50" name = "room_no" class = "form-control" required = "required"/>
				</div>&emsp;
				<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label>Days</label>
					<input type = "number" min = "0" max = "99" name = "days" class = "form-control" required = "required"/>
				</div>&emsp;
				<button name = "save_form" class = "btn btn-dark text-light">Submit</button>
			</form>
		</div>
		
		<footer class="p-3"  style="background-color:linen; text-align:right; position: fixed; bottom: 0; width: 100%;">
			<label>&copy; Copyright 2023 </label>
		</footer>

	</body>
</html>