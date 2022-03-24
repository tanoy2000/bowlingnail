<?php
session_start();
include('../conn/conn.php');
if (!isset($_GET['ser_id'])) {
    exit();
}
// $qty = $_GET['qty'];
// $total_price = $_GET['total_price'];
$ser_id = $_GET['ser_id'];
$price_id = $_GET['price'];
$cus_id = $_SESSION['cus_id'];
$status_id = "";
$total_price = "";
$paid_date = "";
$book_satatus = "ยังไม่เลือกลายเล็บ";
$paid_time= "";
$amount_paid = "";
$amount_left = "";
$book_date = "";
$sqlCheck = "SELECT * FROM booking WHERE cus_id = '$cus_id' AND book_satatus = 'ยังไม่เลือกลายเล็บ'";
$resultCheck = mysqli_query($conn, $sqlCheck);
print_r($resultCheck);

if (mysqli_num_rows($resultCheck) > 0) {
    $ST_ID = array();
    $sqlFetchId = "SELECT * FROM booking WHERE cus_id = '$cus_id'";
    $resultID = mysqli_query($conn, $sqlFetchId);
    $rowID = mysqli_fetch_array($resultID);
    $rowPurchaseID = $rowID["book_id"];
    $sqlCheckDetail = "SELECT * FROM book_nail_detail WHERE book_id = '$rowbookID'";
    $result = mysqli_query($conn, $sqlCheckDetail);
    while ($row1 = mysqli_fetch_array($result)) {
        if ($row1["ST_ID"] == $ser_id) {
            $pd_id[] = $row1["ST_ID"]; 
            // $rowQty = $row1["qty"] ;
        } else if ($row1["ST_ID"] != $ser_id) {
            $ST_ID[] = '';
            // $sql = "INSERT INTO orderdetail(pd_id,qty,price,purchase_id) VALUES($product_id,$qty,'$product_price','$rowPurchaseID')";
            // $result1 = mysqli_query($conn, $sql);
        }
    }
    if(in_array($ser_id, $ST_ID)){
        $sql = "UPDATE book_nail_detail WHERE ST_ID = '$ser_id'AND book_id = '$rowbookID'";
        $result1 = mysqli_query($conn, $sql);
    }else{
            $sql = "INSERT INTO book_nail_detail(ST_ID,price,book_id) VALUES($ser_id,'$price_id','$rowbookID')";
            $result1 = mysqli_query($conn, $sql);
    }
} else {
    $sqlCreateOrder = "INSERT INTO booking(total_price,paid_date,paid_time,amount_paid,amount_left,book_date,time_start,time_end,book_satatus,slip,ST_ID, cus_id) 
                         VALUES ('$total_price','$paid_date','$paid_time','$amount_paid','$amount_left','$book_date','$time_start','$time_end','$book_satatus','$slip','$ST_ID', '$cus_id')";
    mysqli_query($conn, $sqlCreateOrder);
    $sqlFetchId = "SELECT * FROM booking WHERE cus_id = '$cus_id' ORDER BY ser_id DESC LIMIT 1";
    $resultID = mysqli_query($conn, $sqlFetchId);
    $rowID = mysqli_fetch_array($resultID);
    $rowbookID = $rowID["ser_id"];
    $sql = "INSERT INTO book_nail_detail(ST_ID,price_id,ser_id) VALUES($ser_id,$qty,'$price_id','$rowbookID')";
    mysqli_query($conn, $sql);
}



for ($i = 0; $i < count($list_product); $i++) {
    $prod = $list_product[$i];
    $sub_qty = $list_qty[$i];
    $sqlPrice = "SELECT * FROM product WHERE pd_id = '$prod'";
    $resultPrice = mysqli_query($conn, $sqlPrice);
    $rowPrice = mysqli_fetch_array($resultPrice);
    $qty_amount = $rowPrice["pd_qty"];
    $rowPrice = $rowPrice["pd_price"];
    $sqlDetail = "INSERT INTO orderdetail(pd_id,qty,purchase_id,price) VALUES('$prod','$sub_qty','$rowID',$rowPrice)";
    $resultDetail = mysqli_query($conn, $sqlDetail);
    $totalqty = $qty_amount - $sub_qty;
    $sqlUpdate = "UPDATE product SET pd_qty = $totalqty WHERE pd_id = '$prod'";
    mysqli_query($conn, $sqlUpdate);
    echo "<script>console.log('" . $sub_qty . "')</script>";
    echo "<script>console.log('" . $qty_amount . "')</script>";
}



if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO cart(pd_id,qty,user_username) VALUES($product_id,$qty,'$username')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        exit();
    }
    echo 'insert success';
} else {
    $oldData = mysqli_fetch_assoc($result);
    $newQty = $oldData['qty'] + $qty;
    $sql = "UPDATE cart SET qty = $newQty WHERE user_username = '$username' and pd_id = $product_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'update success';
    }
}


