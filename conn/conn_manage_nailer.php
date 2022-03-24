<?php
include('conn.php');
$leave_id = $_GET['leave_id'];
$leavestatus_id =$_GET['leavestatus_id'];
mysqli_query($con,"UPDATE nailer_leave SET leavestatus_id='$leavestatus_id'  WHERE leave_id='$leave_id'");	
header('location:../admin/show_nailer.php');

