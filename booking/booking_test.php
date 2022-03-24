<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    
    <table class="table table-striped table-hover" id="table_booking">
            <thead>
                <th width="10%">รูปภาพ </th>
                <th width="10%">ชื่อลายเล็บ</th>
                <th width="20%">รายละเอียด</th>
                <th width="10%">แบบเล็บ / เซ็ต</th>
                <th width="10%">ราคา</th>
                <th width="10%"></th>
            </thead>
            <tbody>
                <?php
                include('../conn/conn.php');
                $cus_id = $_SESSION['cus_id'];
                $sqlselect = "SELECT * FROM booking WHERE cus_id = $cus_id and book_status = 0 ORDER BY book_id DESC LIMIT 1";
                $resultselect = mysqli_query($conn, $sqlselect);
                $rowselect = mysqli_fetch_array($resultselect);
                $book_id = $rowselect['book_id'];
                $numrow = mysqli_num_rows($resultselect);
                if ($numrow > 0) {
                    $_SESSION['book_id'] = $rowselect['book_id'];
                    $sqldetail = "SELECT * FROM book_nail_detail INNER join service_item on service_item.ST_ID = book_nail_detail.ST_ID 
                                       INNER join nail_set on service_item.ns_id = nail_set.ns_id 
                                       WHERE service_item.S_ID != 6 and service_item.S_ID != 7 and book_id = $book_id";
                    $resultdetail = mysqli_query($conn, $sqldetail);

                    while ($rowdetail = mysqli_fetch_array($resultdetail)) { ?>
                        <tr>
                            <td width="10%"><img width=50 src="<?php echo $rowdetail['file'] ?>"></th>
                            <td width="10%"><?php echo $rowdetail['name'] ?></td>
                            <td width="20%"><?php echo $rowdetail['detail'] ?></td>
                            <td width="10%"><?php echo $rowdetail['ns_name'] ?></td>
                            <td width="10%"><?php echo $rowdetail['price'] ?></td>
                            <td style="width:8%;">
                                <span>
                                    <a href="#delbook<?php echo $rowdetail['bd_id']; ?>" data-toggle="modal" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>ลบ </a>
                                    <?php include('../model/booking_model.php'); ?>

                                </span>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>


            </tbody>
            <br><br>

        </table>
        <br><br>

        <div class="row">
            <div class="col-lg-6" id="cartbook">
                <i class="fas fa-shopping-cart"></i>&nbsp;&nbsp; ตะกร้าสปามือและเท้า
                <hr style="margin-top:-0.5px;">
            </div>
        </div><br>

        <table class="table table-striped table-hover" id="table_booking">
            <thead>
                <!-- อาจจะใส่รูป -->
                <!-- <th></th>  -->
                <th width="10%">รูปภาพ </th>
                <th width="10%">ชื่อลายเล็บ</th>
                <th width="20%">รายละเอียด</th>
                <th width="10%">แบบเล็บ / เซ็ต</th>
                <th width="10%">ราคา</th>
                <th width="10%"></th>
            </thead>
            <tbody>
                <?php
                include('../conn/conn.php');
                $cus_id = $_SESSION['cus_id'];
                $sqlselect = "SELECT * FROM booking WHERE cus_id = $cus_id and book_status = 0 ORDER BY book_id DESC LIMIT 1";
                $resultselect = mysqli_query($conn, $sqlselect);
                $numrow = mysqli_num_rows($resultselect);
                if ($numrow > 0) {
                    $rowselect = mysqli_fetch_array($resultselect);
                    $book_id = $rowselect['book_id'];
                    $sqldetail = "SELECT * FROM book_nail_detail INNER join service_item on service_item.ST_ID =  book_nail_detail.ST_ID 
                                       INNER join nail_set on service_item.ns_id = nail_set.ns_id 
                                       WHERE service_item.S_ID != 1 and service_item.S_ID != 2 and service_item.S_ID != 3 
                                       and service_item.S_ID != 4 and service_item.S_ID != 5 and book_id = $book_id";
                    $resultdetail = mysqli_query($conn, $sqldetail);

                    while ($rowdetail = mysqli_fetch_array($resultdetail)) { ?>
                        <tr>
                            <td width="10%"><img width=50 src="<?php echo $rowdetail['file'] ?>"></th>
                            <td width="10%"><?php echo $rowdetail['name'] ?></td>
                            <td width="20%"><?php echo $rowdetail['detail'] ?></td>
                            <td width="10%"><?php echo $rowdetail['ns_name'] ?></td>
                            <td width="10%"><?php echo $rowdetail['price'] ?></td>
                            <td style="width:8%;">
                                <span>
                                    <a href="#delbook<?php echo $rowdetail['bd_id']; ?>" data-toggle="modal" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>ลบ </a>
                                    <?php include('../model/booking_model.php'); ?>
                                </span>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
            <br><br>
        </table>
        <br><br>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>