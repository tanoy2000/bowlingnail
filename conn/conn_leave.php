<?php 
include('conn.php');
$leave_id = $_GET['leave_id'];
$leavestatus_id = $_GET['leavestatus_id'];
mysqli_query($conn,"update nailer_leave set leavestatus_id = '$leavestatus_id' where leave_id='$leave_id'");
header('location:../admin/show_nailer.php');
?>