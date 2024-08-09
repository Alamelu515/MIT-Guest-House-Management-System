<!DOCTYPE html>
<!--To show checked in details-->
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
			<h1 class="mb-5">Reservations - Check In</h1>
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<a class = "btn btn-dark text-light disabled"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
			<a class = "btn btn-dark text-light" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
			<a class = "btn btn-dark text-light" href = "checkout.php">Check Out</a>
			<br />
			<br />
			<table id = "table" class = "table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Room Type</th>
						<th>Room Number</th>
						<th>Check In</th>
						<th>Days</th>
						<th>Check Out</th>
						<th>Status</th>
						<th>Bill</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = 'Check In'") or die(mysqli_query());
						while($fetch = $query->fetch_array())
						{
					?>
					<tr>
						<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
						<td><?php echo $fetch['room_type']?></td>
						<td><?php echo $fetch['room_no']?></td>
						<td><?php echo date("M d, Y", strtotime($fetch['checkin']))?></td>
						<td><?php echo $fetch['days']?></td>
						<td><?php echo date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))?></td>
						<td><?php echo $fetch['status']?></td>
						<td><?php echo "₹ ".$fetch['bill']?></td>
						<td><center>
							<a class = "btn btn-dark text-light" href = "checkout_query.php?transaction_id=<?php echo $fetch['transaction_id']?>">Check Out</a>
						</center></td>
					</tr>
					<?php
						}
						if (!$query->num_rows)
						{
							echo "<tr><td colspan='9'>No Data Available</td></tr>";
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