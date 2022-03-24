
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../header_admin.php";?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body><br><br><br>
    <h4>จำนวนคนจองคิวสปามือและเท้า</h4>
    <table class="table">
            <thead>
                <th width="5%">ลำดับ</th>
                <th width="10%">ชื่อลูกค้า</th>  
                <th width="10%">สินค้า</th>  
                <th width="10%">วันที่ลูกค้าจอง</th>  
                <th width="10%">เวลาที่ลูกค้าเริ่มการจอง</th>  
                <th width="10%">เวลาที่ลูกค้าสินค้าการจอง</th>  
          
                    </thead>
                    <span>
                        <tbody>
                        <?php 
                         include('../conn/conn.php');
                        
                         $n = 1;
                         $sql = "SELECT * FROM book_nail_detail
                         INNER JOIN booking ON booking.book_id=book_nail_detail.book_id 
                        INNER JOIN service_item on service_item.ST_ID=book_nail_detail.ST_ID
                         INNER JOIN service_type ON service_type.S_ID=book_nail_detail.S_ID
                         INNER JOIN customer on customer.cus_id = booking.cus_id
                         where book_nail_detail.S_ID= 1 and 2";
                         $result = mysqli_query($conn, $sql);
                         while ($row = mysqli_fetch_array($result)) { ?>
                        </tbody>
                        
                        <td><?php echo $row['book_id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['date_add']; ?></td>
                        <td><?php echo $row['time_start']; ?></td>
                        <td><?php echo $row['time_end']; ?></td>

                         <?php 
                         }
                         $n++
                         ?>
                </table>

                <h4>จำนวนคนจองคิวสปามือและเท้า</h4>
    <table class="table">
            <thead>
                
                <th width="10%">ชื่อลูกค้า</th>  
                <th width="10%">สินค้า</th>  
                <th width="10%">วันที่ลูกค้าจอง</th>  
                <th width="10%">เวลาที่ลูกค้าเริ่มการจอง</th>  
                <th width="10%">เวลาที่ลูกค้าสินค้าการจอง</th>  
          
                    </thead>
                    <span>
                        <tbody>
                        <?php 
                         include('../conn/conn.php');
                         $nailer_id =  $_SESSION["nailer_id"];
                         $n = 1;
                         $sql = "SELECT * FROM booking
                         INNER JOIN book_nail_datail ON booking.book_id=book_nail_datail.book_id 
                         INNER JOIN nailer on nailer.nailer_id=book_nail_datail.nailer_id
                         INNER JOIN nailer_leave ON nailer_leave.leave_id=type_leave.leave_id
                         INNER JOIN type_leave on customer.cus_id = booking.cus_id
                         where booking.leavestatus_id= 1 ";
                         $result = mysqli_query($conn, $sql);
                         while ($row = mysqli_fetch_array($result)) { ?>
                        </tbody>
                        
                        <td><?php echo $row['book_id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['date_add']; ?></td>
                        <td><?php echo $row['time_start']; ?></td>
                        <td><?php echo $row['time_end']; ?></td>

                         <?php 
                         }
                         $n++
                         ?>
                </table>

                <table class="table table-striped table-bordered table-hover w-100">
                    <thead class="header-table">
                        <!-- อาจจะใส่รูป -->
                        
                        <th width="5%">รหัสลูกค้า</th> 
                        <th width="10%">วันที่จอง</th>
                        <th width="10%">เวลาเริ่ม</th>
                        <th width="10%">เวลาสิ้นสุด</th>
                        <th width="10%">รายละเอียด</th>
                        <th width="10%">ราคา</th>
                        <th width="10%">สถานะการทำงาน</th>
          
                    </thead>
                    <span>
                        <tbody class="header-table">
                        <?php 
                         include('../conn/conn.php');
                         $nailer_id =  $_SESSION["nailer_id"]; 
                         $sql = "SELECT * FROM book_nail_detail 
                         INNER JOIN booking ON booking.book_id=book_nail_detail .book_id 
                         INNER JOIN service_item ON service_item.ST_ID=book_nail_detail.ST_ID 
                         INNER JOIN nailer ON nailer.nailer_id=book_nail_detail.nailer_id where nailer.nailer_id = $nailer_id";
                         $result = mysqli_query($conn, $sql);
                         while ($row = mysqli_fetch_array($result)) { ?>
                        
                       
                        </tbody>
                        <td><?php echo $row['book_id']; ?></td>
                        <td><?php echo $row['date_add']; ?></td>
                        <td><?php echo $row['time_start']; ?></td>
                        <td><?php echo $row['time_end']; ?></td>
                        <td>
                            รูปภาพ : <img src="<?php echo $row['file']; ?>" width="30%"><br>
                            ชื่อ : <?php echo $row['name']; ?>
                        </td>
                        <td><?php echo $row['cus_price']; ?></td>
                        <td><?php if ($row ['book_status'] == '1') {
                            echo 'ทำงานเสร็จสิ้น'; }
                        else { ?>
                            <a href="../conn/conn_working.php?book_id=<?php echo $row["book_id"] ?>&book_status=1">ยืนยัน</a> 
                      <?php  }
                        
                        ?> </td>
                                   
                         <?php 
                         }
                         ?>
                </table>

                
</body>
</html>