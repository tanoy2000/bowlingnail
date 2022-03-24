<?php
include '../conn/conn.php';
// session_start();
if (isset($_SESSION['cus_id'])) {
    $cus_id = $_SESSION['cus_id'];
    $sqlCheck = "SELECT * FROM booking WHERE cus_id = '$cus_id' AND book_status = 0 ORDER BY book_id DESC LIMIT 1";
    $resultCheck = mysqli_query($conn, $sqlCheck);
    // $sqlFetchId = "SELECT * FROM booking WHERE cus_id = '$cus_id' ORDER BY book_id DESC LIMIT 1";
    // $resultID = mysqli_query($conn, $sqlFetchId);
    $rowID = mysqli_fetch_array($resultCheck);
    if ($rowID >= 1) {
        $rowbookID = $rowID["book_id"];
        $sqlCheckDetail = "SELECT * FROM book_nail_detail WHERE book_id = '$rowbookID'";
        $result = mysqli_query($conn, $sqlCheckDetail);
        $numOfCart =  mysqli_num_rows($result);
        $sqlJoin = "SELECT * FROM book_nail_detail JOIN service_item on book_nail_detail.ST_ID = service_item.ST_ID WHERE book_id = '$rowbookID'";
        $result2 = mysqli_query($conn, $sqlJoin);
    } else {
        $numOfCart = '0';
        $rowbookID = '0';
    }
} else {
    $numOfCart = '0';
    $rowbookID = '0';
}
    
    // Update
    
