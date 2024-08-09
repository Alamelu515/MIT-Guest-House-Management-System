<?php
	require_once 'connect.php';
	if(isset($_POST['save_form']))
	{
		$room_no = $_POST['room_no'];
		$days = $_POST['days'];
		$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `status` = 'Check In'") or die($conn->error);
		$row = $query->num_rows;
		if($row > 0)
		{
			echo "<script>alert('Room not available')</script>";
		}
		else
		{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die($conn->error);
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['price'] * $days;
			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `transaction` SET `room_no` = '$room_no', `days` = '$days', `status` = 'Check In', `checkout` = '$checkout', `bill` = '$total' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die($conn->error);
			header("location:checkin.php");
		}
	}
?>