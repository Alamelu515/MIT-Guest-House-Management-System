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
			<h1 class="mb-5">Contact Us</h1>
			<!--<div class="contact-form" style="font-size:20px;">
				<form method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div><br>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" required>
					</div><br>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
					</div><br>
					<button type="submit" onclick="alert('Thanks for contacting us!')" class="btn btn-dark text-light" style="margin-bottom:20px;">Submit</button>
				</form>
			</div>-->
			<div style="font-size:20px;">
			<p>Mr. M. Sudandhiram: 8608679413</p>
			<p>Mr. M. Natarajan: 9551312244</p>
			<p>Email: <a href="mailto:Mithostelsguesthouse@gmail.com">Mithostelsguesthouse@gmail.com</a></p>
	</div>
		</div>

		<footer class="p-3" style="background-color:linen; text-align:right; position: fixed; bottom: 0; width: 100%;">
			<label>&copy; Copyright 2023 </label>
		</footer>
	</body>	
</html>