<?php
	require_once 'connect.php';
	$conn->query("UPDATE `transaction` SET `status` = 'Check Out' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die($conn->error);
	header("location:checkout.php");
?>