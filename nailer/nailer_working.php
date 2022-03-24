
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../header_nailer.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../table_card.css">
    <link rel="stylesheet" href="../css_nailer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/541e01753a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>


</head>
<body>

<div class="container--fluid" id="header_nailer">
        <div class="row">
            <div class="col-md-12">
                <h2>รายการดำเนินการของช่างทำเล็บ</h2>
            </div>
        </div><br><br>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table table-striped table-hover w-100">
                    <thead class="header-table" width="100%">
                        <!-- อาจจะใส่รูป -->
                        
                        <th scope="col" width="10%">รหัสลูกค้า</th> 
                        <!-- <th width="5%">ชื่อลูกค้า</th>  -->
                        <th scope="col" width="10%">วันที่จอง</th>
                        <th scope="col" width="15%">เวลาที่จอง</th>
                        <!-- <th scope="col">เวลาสิ้นสุด</th> -->
                        <th scope="col" width="30%">รายละเอียดสินค้า</th>
                        <th scope="col" width="10%">ราคา</th>
                        <th scope="col" width="10%">สถานะการทำงาน</th>
          
                    </thead>
                    <span>
                        <tbody class="header-table">
                        <?php 
                         include('../conn/conn.php');
                         $nailer_id =  $_SESSION["nailer_id"]; 
                         $book_id =  $_SESSION["book_id"];
                         $sql = "SELECT * FROM booking
                         INNER JOIN book_nail_detail ON book_nail_detail.book_id=booking.book_id 
                         INNER JOIN customer ON booking.cus_id=booking.cus_id
                         INNER JOIN service_item ON service_item.ST_ID=book_nail_detail.ST_ID 
                         INNER JOIN nailer ON nailer.nailer_id=book_nail_detail.nailer_id where nailer.nailer_id = $nailer_id";
                         $result = mysqli_query($conn, $sql);
                         while ($row = mysqli_fetch_array($result)) { ?>
                        
                       
                        </tbody>
                        <td data-label="รหัสลูกค้า"><?php echo $row['book_id']; ?></td>
                        <td data-label="วันที่จอง"><?php echo $row['date_add']; ?></td>
                        <td data-label="เวลาที่จอง"><?php echo $row['timeslots']; ?></td>
                        <td data-label="รายละเอียดสินค้า">
                            รูปภาพ : <img src="<?php echo $row['file']; ?>" width="30%"><br>
                            ชื่อ : <?php echo $row['name']; ?>
                        </td>
                        <td data-label="ราคา"><?php echo $row['cus_price']; ?></td>
                        <td data-label="สถานะการทำงาน"><?php if ($row ['nailer_book'] == '1') {
                            echo 'ทำงานเสร็จสิ้น'; }
                        else { ?>
                            <a href="../conn/conn_working.php?book_id=<?php echo $row["book_id"] ?>&nailer_book=1">ยืนยัน</a> 
                      <?php  }
                        
                        ?> </td>
                                   
                         <?php 
                         }
                         ?>
                </table>
            </div>
            <div class="col-1"></div>
        </div><br>
    
    </div>

   
    
</body>
</html>