<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatsystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Failed to connect".mysql_connect_error());
}
else{
	echo "";
}

 ?>