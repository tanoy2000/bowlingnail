<?php
include('../conn/conn.php');
session_start();
$cus_id = $_SESSION['cus_id'];
$ST_ID = $_GET['ST_ID'];
$S_ID = $_GET['S_ID'];
$cus_price = $_POST['cus_price'];
$date = date("Y-m-d");
print_r($date);
$queryBooking = "SELECT * FROM booking where cus_id = $cus_id AND book_status = 0 LIMIT 1";
$bookingQuery = mysqli_query($conn, $queryBooking); 
$sqlselect = "SELECT * FROM booking WHERE cus_id = $cus_id ORDER BY book_id DESC LIMIT 1";
$resultselect = mysqli_query($conn, $sqlselect);
$numrow = mysqli_num_rows($bookingQuery);
if ($numrow < 1) {
    $sqlInsert = "INSERT INTO booking(cus_id,book_status) VALUES($cus_id,0)";
    $result = mysqli_query($conn, $sqlInsert);
   
    $rowselect = mysqli_fetch_array($resultselect);
    $book_id = $rowselect['book_id'];
    $insrtDetail = "INSERT INTO book_nail_detail(book_id,S_ID,ST_ID,cus_price,date_add) VALUES ($book_id,$S_ID,$ST_ID,$cus_price,'$date')";
    mysqli_query($conn, $insrtDetail);
}

$rowselect = mysqli_fetch_array($resultselect);
$book_id = $rowselect['book_id'];
$insrtDetail = "INSERT INTO book_nail_detail(book_id,S_ID,ST_ID,cus_price,date_add) VALUES ($book_id,$S_ID,$ST_ID,$cus_price,'$date')";
mysqli_query($conn, $insrtDetail);
// $total_price = $_POST['total_price'];
// $paid_date = $_POST['paid_date'];
// $paid_time= $_POST['paid_time'];
// $amount_paid = $_POST['amount_paid'];
// $amount_left = $_POST['amount_left'];
// $book_date = $POST['book_date'];
// $time_start = $_POST['time_start'];
// $time_end = $_POST['time_end'];
// $status_id = "";
// $slip = "";
// $ST_ID = $_POST['ST_ID'];
// $Createbooking = "INSERT INTO booking(total_price,paid_date,paid_time,amount_paid,amount_left,book_date,time_start,time_end,status_id,slip,ST_ID, cus_id) 
//                     VALUES ('$total_price','$paid_date','$paid_time','$amount_paid','$amount_left','$book_date','$time_start','$time_end','$status_id','$slip','$ST_ID', '$cus_id')";
// mysqli_query($con, $Createbooking);
// $data = "SELECT * FROM booking where cus_id = '$cus_id' ORDER BY book_id DESC LIMIT 1";
// $resultdata = mysqli_query($con, $data);
// $rowID = mysqli_fetch_array($resultdata);
// $rowData = $rowID['book_id'];

// for ($i = 0; $i < sizeof($checknail); $i++) {
//     $Createbooking_detail1 = "INSERT INTO book_nail_detail(book_id, bd_id) VALUES('$rowData','$checknail[$i]')";
//     mysqli_query($con, $Createbooking_detail1);
// }

echo "<script> alert('จองสำเร็จ')</script>";
header('location:../header/header_spa.php');

// http://localhost/nailacy/header/headerh_p.php