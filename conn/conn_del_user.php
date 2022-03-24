<?php
	include('conn.php');

	$cus_id=$_GET['cus_id'];
	mysqli_query($conn,"delete from customer where cus_id='$cus_id'");
	header('location:../admin/show_user.php');

?>