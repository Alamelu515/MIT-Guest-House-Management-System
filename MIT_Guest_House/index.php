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
			<center><h1 class="mb-4">MIT Guest House - Excellence in Hospitality for Our Esteemed Visitors!!!</h1></center>
			<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="6"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="7"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="carousel/frontgate.jpg" class="image d-block w-100">
					</div>
					<div class="carousel-item">
						<img src="carousel/hostelgate.jpg" class="image d-block w-100">
					</div>
					<div class="carousel-item">
						<img src="carousel/rajam.png" class="image d-block w-100">
					</div>
					<div class="carousel-item">
						<img src="carousel/room.png" class="image d-block w-100">
					</div>
					<div class="carousel-item">
						<img src="carousel/room1.jpg" class="image d-block w-100">
					</div>
					<div class="carousel-item">
						<img src="carousel/room2.jpg" class="image d-block w-100">
					</div>
					<div class="carousel-item">
						<img src="carousel/corridor.jpg" class="image d-block w-100">
					</div>
					<div class="carousel-item">
						<img src="carousel/dining.jpg" class="image d-block w-100">
					</div>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
		</div>

		<div class="p-3 m-0" style = "background-color:linen; text-align:right;">
			<label>&copy; Copyright 2023 </label>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	</body>	
</html>
