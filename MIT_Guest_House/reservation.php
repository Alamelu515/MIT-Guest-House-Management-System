<!DOCTYPE html>
<html>
	<head>
		<title>MIT Guest House</title>
		<link rel="icon"  href="mit.jpeg">
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
			.image
			{
				height:500px;
				width:100%;
			}
		</style>	
	</head>
	<body class="bg-light">

		<div class="p-3" style="background-color:linen; display: flex; flex-direction: row; justify-content: space-between;">
			<div style="display:flex; flex-direction:row;">
				<img src="logo.png" height="50px" width="50px" class="m-3">
				<p class="p-1" style="font-size:38px;"> MIT Guest House </p>
			</div>
			<div class="pt-4" style="font-size:20px;">
				<a href="index.php">Home</a>&emsp;
				<a href="aboutus.php">About Us</a>&emsp;
				<a href="ourgallery.php">Our Gallery</a>&emsp;
				<a href="reservation.php">Make a Reservation</a>&emsp;
				<a href="contactus.php">Contact Us</a>
			</div>
		</div>

		<div class="container py-5">
			<h1 class="mb-5">Make a Reservation</h1>
			<?php
				require_once 'admin/connect.php';
				$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die($conn->error);
				while($fetch = $query->fetch_array()){
			?>
				<div style = "height:300px; width:100%;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350" style="margin-right:20px;"/>
					</div>
					<div style = "float:left;">
						<h3><?php echo $fetch['room_type']?></h3>
						<h4><?php echo "Price: ₹ ".$fetch['price']." per night's stay"?></h4>
						<br /><br /><br /><br /><br /><br />
						<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-dark text-light">Reserve</a>
					</div>
				</div>
			<?php
				}
			?>
		</div>
		
		<div class="p-3 m-0" style = "background-color:linen; text-align:right;">
			<label>&copy; Copyright 2023 </label>
		</div>
	</body>	
</html>