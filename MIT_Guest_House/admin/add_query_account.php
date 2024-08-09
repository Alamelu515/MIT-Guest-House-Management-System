<?php
	if(isset($_POST['add_account']))
	{
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		require_once 'connect.php';
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die($conn->error);
		$valid = $query->num_rows;
		if($valid > 0)
		{
			echo "<center><label style = 'margin:10px; color:red;'>Username already taken</center></label>";
		}
		else
		{
			$conn->query("INSERT INTO `admin` (name, username, password) VALUES('$name', '$username', '$password')") or die($conn->error);
			header("location:account.php");
		}
	}
?>