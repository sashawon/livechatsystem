<?php 
include("connection.php");

$room = $_POST['room'];

	if(strlen($room)>15 or strlen($room)<2)
	{
		$msg = "Please Choose a Room Name between 2 to 15 Characters";

		echo '<script language = "javascript">';
		echo 'alert(" '.$msg.' "); ';
		echo 'window.location = "http://lcs.sashawon.xyz/"; ';
		echo '</script>';
	} else {
		$query = "SELECT * FROM rooms WHERE roomname = '$room' ";
		$result = mysqli_query($conn,$query);

		if ($result) {
			if(mysqli_num_rows($result)>0){
				$msg = "Room Already in USE!. Please Choose a Different Room Name";

				echo '<script language = "javascript">';
				echo 'alert(" '.$msg.' "); ';
				echo 'window.location = "http://lcs.sashawon.xyz/; ';
				echo '</script>';
		}else{
			$query = "INSERT INTO rooms(roomname,ctime) VALUES ('$room',CURRENT_TIMESTAMP)";

			if (mysqli_query($conn,$query)) {
				$msg = "Your Room is Ready for Chat!";

				echo '<script language = "javascript">';
				echo 'alert(" '.$msg.' "); ';
				echo 'window.location = "http://lcs.sashawon.xyz/rooms.php?roomname='.$room.'"; ';
				echo '</script>';
					}
				}
			}else{
				echo "ERROR!".mysqli_error($conn);
			}
	}



 ?>