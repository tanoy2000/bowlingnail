<?php
	include('conn.php');

	$bd_id=$_GET['bd_id'];
	mysqli_query($conn,"delete from book_nail_detail where bd_id='$bd_id'");
	header('location:../booking/booking_nail.php');

?>