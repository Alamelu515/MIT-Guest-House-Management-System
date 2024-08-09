<?php
	require_once 'admin/connect.php';
	if(isset($_POST['add_guest']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		//insert guest
		$conn->query("INSERT INTO `guest` (firstname, lastname, address, contactno) VALUES('$firstname', '$lastname', '$address', '$contactno')") or die($conn->error);
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die($conn->error);
		$fetch = $query->fetch_array();
		//check room details (id and checkin)
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
		$row = $query2->num_rows;
		//past date gn
		if($checkin < date("Y-m-d", strtotime('+8 HOURS')))
		{	
			echo "<script>alert('Please choose a date in the present or future')</script>";
		}
		else
		{
			if($row > 0)
			{
				echo "<div class = 'm-5 col-md-4'><label style = 'font-size:20px;'>Sorry, the room is not available on the given date</label><br />";
				$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die($conn->error);
				while($f_date = $q_date->fetch_array())
				{
					echo "<ul>
							<li>	
								<label>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
							</li>
						  </ul>";
				}
				"</div>";
			}
			else
			{	
				if($guest_id = $fetch['guest_id'])
				{
					$room_id = $_REQUEST['room_id'];
					$conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin) VALUES('$guest_id', '$room_id', 'Pending', '$checkin')") or die(mysqli_error());
					header("location:reply_reserve.php");
				}
				else
				{
					echo "<script>alert('Error Javascript Exception!')</script>";
				}
			}	
		}	
	}	
?>