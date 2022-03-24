<?php
include('conn.php');
$book_id = $_GET['book_id'];
$nailer_book = $_GET['nailer_book'];
mysqli_query($conn,"UPDATE booking SET nailer_book= $nailer_book  WHERE book_id='$book_id'");	
header('location:../nailer/nailer_working.php');
?>