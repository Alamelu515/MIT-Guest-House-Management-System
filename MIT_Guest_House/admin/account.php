<!DOCTYPE html>
<!--To show account details-->
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
			<h1 class="mb-5">Accounts</h1>
			<a class = "btn btn-dark text-light" href = "add_account.php">Create New Account</a>
			<br />
			<br />
			<table id = "table" class = "table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Username</th>
						<th>Password</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once 'connect.php';  
						$query = $conn->query("SELECT * FROM `admin`") or die($conn->error);
						while($fetch = $query->fetch_array()){
					?>
					<tr>
						<td><?php echo $fetch['name']?></td>
						<td><?php echo $fetch['username']?></td>
						<td><?php echo $fetch['password']?></td>
						<td><center>
							<a class = "btn btn-dark text-light" href = "edit_account.php?admin_id=<?php echo $fetch['admin_id']?>">Edit</a> 
							<a class = "btn btn-dark text-light"  href = "delete_account.php?admin_id=<?php echo $fetch['admin_id']?>">Delete</a>
						</center></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
		
		<footer class="p-3"  style="background-color:linen; text-align:right; position: fixed; bottom: 0; width: 100%;">
			<label>&copy; Copyright 2023 </label>
		</footer>

	</body>
</html>