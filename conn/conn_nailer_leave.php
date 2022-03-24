<?php
include('conn.php');
$nailer_id = $_GET['nailer_id'];
$leave_type = $_POST['leave_type'];
$leave_begin = $_POST['leave_begin'];
$leave_end = $_POST['leave_end'];
$leave_description = $_POST['leave_description'];
$leave_date = $_POST['leave_date'];
$leavestatus_id = '3';
if ($leave_date != '') {
    mysqli_query($conn, "insert into nailer_leave (leave_begin,leave_description,nailer_id,leavestatus_id,leave_type) values ('$leave_date','$leave_description','$nailer_id','$leavestatus_id','$leave_type')");
}else {
    mysqli_query($conn, "insert into nailer_leave(leave_begin,leave_end,leave_description,nailer_id,leavestatus_id,leave_type) values ('$leave_begin','$leave_end','$leave_description','$nailer_id','$leavestatus_id','$leave_type')");
}
header('location:../nailer/nailer_leave.php');
