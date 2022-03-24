<?php
 
// MySQLi Procedural
$conn = mysqli_connect("localhost","root","","projectnail");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// mysqli_query($con, "SET NAMES 'utf8' ");
// $conn = mysqli_connect("localhost","bowlingn_project","7j9G9APz","bowlingn_project");
// if (!$conn) {
// 	die("Connection failed: " . mysqli_connect_error());
// }
// mysqli_query($conn, "SET NAMES 'utf8' ");
 ?>