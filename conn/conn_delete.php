<?php
	include('conn.php');

	$ST_ID=$_GET['ST_ID'];
	mysqli_query($conn,"delete from service_item where ST_ID='$ST_ID'");
	header('location:../admin/editnail_hand_one.php');

?>