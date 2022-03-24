<?php include '../function/getNumOfCart.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../css_user.css">
    <link rel="stylesheet" href="../css_breadcrumb.css">
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/541e01753a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div>
            <?php include('../header_booking.php');
            $cus_id = $_SESSION['cus_id']; 
            $book_id = $_SESSION['book_id'];?>
        </div>
    </header><br><br>
    <form action="../conn/conn_bookingstep2.php?cus_id=<?php echo $cus_id ?>&book_id=<?php echo $book_id?>" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-12"  id="header_booking">
                    <h2>ขั้นตอนการจองคิวร้านทำเล็บ</h2>
                </div>
            </div><br><br><br>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="wrapper">
                        <ul>
                            <li>
                                <a href="../booking/booking_nail.php">
                                    <i class="fas fa-shopping-basket icon"></i>
                                    <p>สินค้าในตะกร้า</p>
                                </a>
                            </li>
                            <li class="active">
                                <a href="booking_nailer.php">
                                    <i class="fas fa-calendar-alt icon"></i>
                                    <p>เลือกวัน / เวลา และช่างทำเล็บ</p>
                                </a>
                            </li>
                            <li>
                                <a href="../booking/booking_payment.php">
                                    <i class="fas fa-money-check icon"></i>
                                    <p>ชำระเงิน / ยืนยันการจอง</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-2"></div>
            </div> <br><br>

            <div class="select-day">
                <form action="booking_nailer.php" method="GET">
                    <div class="row-check">
                        <?php

                        $query1 = "SELECT * FROM book_nail_detail ";
                        $date = mysqli_query($conn, $query1); ?>

                        <div>
                            <label class="pickdatestr">กรุณาเลือกวันที่ต้องการจอง : </label>
                        </div>
                        <div>
                            <input name="bookingdate" class="form-control" type="date" value="0000-00-00" id="date" name="date" min='1899-01-01' max='3000-12-12' required>
                        </div>
                        <script>
                            var today = new Date();
                            var dd = today.getDate() + 1;
                            var mm = today.getMonth() + 1; //January is 0!
                            var yyyy = today.getFullYear();
                            if (dd < 10) {
                                dd = '0' + dd
                            }
                            if (mm < 10) {
                                mm = '0' + mm
                            }
                            today = yyyy + '-' + mm + '-' + dd;
                            document.getElementById("date").setAttribute("min", today);
                        </script>

                        <input type="submit" value="ตกลง">
                        <hr>
                    </div>
                </form>
            </div>

        <div>
            <label class="pickdatestr"><i class="bi bi-calendar3"></i>&nbsp; วันที่เลือกจอง : </label>
        </div>

        <div class="row">
        <?php
            $n = 1;
            include('../conn/conn.php');
            $query = mysqli_query($conn, "SELECT * from nailer");
            while ($row = mysqli_fetch_array($query)) {
        ?>
        <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-2" id="img_book">
            <img src="<?php echo $row['nailer_picture']?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-3">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-id-card"></i> &nbsp;&nbsp;<?php echo $row['nailer_name']; ?></h5>
                <p class="card-text"><a href="" style="text-align:center;">กดเพื่อดูโปรไฟล์ช่างทำเล็บ</a></p>
            </div>
            </div>
            <?php
                $arraytmend = array();
                $arraytmstr = array();
                $qr_allDetail = mysqli_query($conn, "select * from book_nail_detail WHERE nailer_id = $nailerid AND date = '$date'");
                while ($row_allDetail = mysqli_fetch_array($qr_allDetail)) {
                $allDetaildate = $row_allDetail['date'];
                $timestart = date("H", strtotime($row_allDetail['time_start']));
                $timeend =  date("H", strtotime($row_allDetail['time_end']));
                array_push($arraytmstr, $timestart);
                array_push($arraytmend, $timeend);
                }
            ?>
            <input type="radio" name="radionailer" value="<?php echo $row['nailer_id'] ?>" required>เลือกช่าง
            <div class="col-md-3" id="time_book1">
            <label class="timenailer"><i class="bi bi-alarm"></i>&nbsp;เลือกเวลาของช่างทำเล็บ : </label><br>
            <?php
            $countertmstr = sizeof($arraytmstr);
            $countertmend = sizeof($arraytmend);
            $checktimestart = 10;
            for ($i = 0; $i < 8; $i++) { if ($i < $countertmstr) { if ($checktimestart>= $arraytmstr[$i] && $arraytmend[$i] <=
                    $checktimestart) { ?>
                    <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required
                        disabled>
                    <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                    <?php
                                                                        } else { ?>
                    <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required>
                    <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                    <?php }
                                                                        } else { ?>
                    <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required>
                    <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                    <?php }
                    $checktimestart++;
                    ?>
                    <?php }
                    ?>
                    </div>
                    </div>
                    <?php
                }
                $n++
                ?>
            </div>
        </div>
        </div>
        </div><br>

            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="booking_nail.php">
                            <button id="btnback" type="button" class="btn btn-danger btn-xs">ย้อนกลับ</button>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="../booking/booking_payment.php">
                            <button id="btnnext" type="submit" class="btn btn-outline-danger btn-xs" type="button">หน้าถัดไป</button>
                        </a>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>

            <?php include('../model/main_model.php'); ?>

        </div>
    </form>
</body>
</html>



<?php include '../function/getNumOfCart.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../css_breadcrumb.css">
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/541e01753a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div>
            <?php include('../header_booking.php');
            $cus_id = $_SESSION['cus_id'];
            $book_id = $_SESSION['book_id']; ?>
        </div>
    </header><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align:center; color:#8B2500; font-size:25px; margin-top:80px;">
                    ขั้นตอนการจองคิวร้านทำเล็บ</h2>
            </div>
        </div><br><br><br>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="wrapper">
                    <ul>
                        <li><a href="../booking/booking_nail.php">
                                <i class="fas fa-shopping-basket icon"></i>
                                <p>สินค้าในตะกร้า</p>
                            </a></li>

                        <li class="active"><a href="booking_nailer.php">
                                <i class="fas fa-calendar-alt icon"></i>
                                <p>เลือกวัน / เวลา และช่างทำเล็บ</p>
                            </a></li>

                        <li><a href="../booking/booking_payment.php">
                                <i class="fas fa-money-check icon"></i>
                                <p>ชำระเงิน / ยืนยันการจอง</p>
                            </a></li>

                    </ul>
                </div>
            </div>
            <div class="col-2"></div>
        </div> <br><br>


        <div class="select-day">
            <form action="booking_nailer.php" method="GET">
                <div class="row-check">
                    <?php

                    $query1 = "SELECT * FROM book_nail_detail ";
                    $date = mysqli_query($conn, $query1); ?>

                    <div>
                        <label class="pickdatestr"><i class="bi bi-calendar2-week"></i> &nbsp;กรุณาเลือกวันที่ต้องการจอง : </label>
                    </div>
                    <div>
                        <input name="bookingdate" class="form-control" type="date" value="0000-00-00" id="date" name="date" min='1899-01-01' max='3000-12-12' required>
                        <script>
                            var today = new Date();
                            var dd = today.getDate() + 1;
                            var mm = today.getMonth() + 1; //January is 0!
                            var yyyy = today.getFullYear();
                            if (dd < 10) {
                                dd = '0' + dd
                            }
                            if (mm < 10) {
                                mm = '0' + mm
                            }
                            today = yyyy + '-' + mm + '-' + dd;
                            document.getElementById("date").setAttribute("min", today);
                        </script>

                        <input type="submit" value="ตกลง">
                    </div>
                   
                    <hr>
                </div>
            </form>
        </div>


        <form action="../conn/conn_bookingstep2.php?cus_id=<?php echo $cus_id ?>&book_id=<?php echo $book_id ?>" method="POST">
            <?php if (isset($_GET['bookingdate'])) {
                $date = $_GET['bookingdate'];
               
            ?> <div>
                    <label class="pickdatestr"><i class="bi bi-calendar2-week"></i> &nbsp;วันที่เลือกจอง : <?php echo $date ?> </label>
                </div>
                <div class="container">
                 <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <input type="text" name="date" style="display:none" value="<?php echo $date?>">
                                    <?php
                                    $n = 1;
                                    include('../conn/conn.php');
                                    $query = mysqli_query($conn, "select * from nailer");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $nailerid = $row['nailer_id'];
                                    ?>
                                    <div class="col-md-6">
                                        <div class="card" id="nailer1">
                                            <div style="text-align:center;">
                                                <img src="<?php echo $row['nailer_picture']?>" class="img-fluid rounded-start" width="50%">
                                            </div>
                                            <p class="card-text">
                                                <p style="font-size: 24px; text-align:center;">
                                                <i class="fas fa-id-card"></i> &nbsp;&nbsp;<?php echo $row['nailer_name']; ?>
                                                </p>
                                            </p>
                                            <?php
                                            $arraytmend = array();
                                            $arraytmstr = array();
                                            $qr_allDetail = mysqli_query($conn, "select * from book_nail_detail WHERE nailer_id = $nailerid AND date = '$date'");
                                            while ($row_allDetail = mysqli_fetch_array($qr_allDetail)) {
                                            $allDetaildate = $row_allDetail['date'];
                                            $timestart = date("H", strtotime($row_allDetail['time_start']));
                                            $timeend =  date("H", strtotime($row_allDetail['time_end']));
                                            array_push($arraytmstr, $timestart);
                                            array_push($arraytmend, $timeend);
                                            }
                                            ?>

                                            <input type="radio" name="radionailer" value="<?php echo $row['nailer_id'] ?>" required>เลือกช่าง
                                            <a href=".." style="text-align:center;">กดเพื่อดูโปรไฟล์ช่างทำเล็บ</a><br>
                                            <label class="timenailer">วันเวลาของช่างทำเล็บ : </label><br>
                                            <?php
                                                $countertmstr = sizeof($arraytmstr);
                                                $countertmend = sizeof($arraytmend);
                                                $checktimestart = 10;
                                                    for ($i = 0; $i < 8; $i++) {
                                                        if ($i < $countertmstr) {
                                                            if ($checktimestart >= $arraytmstr[$i] && $arraytmend[$i] <= $checktimestart) { ?>
                                                                <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required disabled>
                                                                <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                                                            <?php
                                                            } else { ?>
                                                                <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required>
                                                                <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                                                            <?php }
                                                            } else { ?>
                                                                <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required>
                                                                <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                                                            <?php }
                                                            $checktimestart++;
                                                            ?>
                                                        <?php }
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            $n++
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4" style="width:100%">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a href="booking_nail.php">
                                <button id="btnback" type="button" class="btn btn-danger btn-xs">ย้อนกลับ</button>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="../booking/booking_payment.php">
                                <button id="btnnext" type="submit" class="btn btn-outline-danger btn-xs" type="button">หน้าถัดไป</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>

            <?php } ?>


            <?php include('../model/main_model.php'); ?>


            <div>
                <?php include('../footer.php'); ?>
            </div>
    </div>
    </form>
</body>

</html>

<!-- แก้1 -->
<?php include '../function/getNumOfCart.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../css_breadcrumb.css">
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/541e01753a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div>
            <?php include('../header_booking.php');
            $cus_id = $_SESSION['cus_id'];
            $book_id = $_SESSION['book_id']; ?>
        </div>
    </header><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align:center; color:#8B2500; font-size:25px; margin-top:80px;">
                    ขั้นตอนการจองคิวร้านทำเล็บ</h2>
            </div>
        </div><br><br><br>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="wrapper">
                    <ul>
                        <li><a href="../booking/booking_nail.php">
                                <i class="fas fa-shopping-basket icon"></i>
                                <p>สินค้าในตะกร้า</p>
                            </a></li>

                        <li class="active"><a href="booking_nailer.php">
                                <i class="fas fa-calendar-alt icon"></i>
                                <p>เลือกวัน / เวลา และช่างทำเล็บ</p>
                            </a></li>

                        <li><a href="../booking/booking_payment.php">
                                <i class="fas fa-money-check icon"></i>
                                <p>ชำระเงิน / ยืนยันการจอง</p>
                            </a></li>

                    </ul>
                </div>
            </div>
            <div class="col-2"></div>
        </div> <br><br>


        <div class="select-day">
            <form action="booking_nailer.php" method="GET">
                <div class="row-check">
                    <?php

                    $query1 = "SELECT * FROM book_nail_detail ";
                    $date = mysqli_query($conn, $query1); ?>

                    <div>
                        <label class="pickdatestr"><i class="bi bi-calendar2-week"></i> &nbsp;กรุณาเลือกวันที่ต้องการจอง : </label>
                    </div>
                    <div>
                        <input name="bookingdate" class="form-control" type="date" value="0000-00-00" id="date" name="date" min='1899-01-01' max='3000-12-12' required>
                        <script>
                            var today = new Date();
                            var dd = today.getDate() + 1;
                            var mm = today.getMonth() + 1; //January is 0!
                            var yyyy = today.getFullYear();
                            if (dd < 10) {
                                dd = '0' + dd
                            }
                            if (mm < 10) {
                                mm = '0' + mm
                            }
                            today = yyyy + '-' + mm + '-' + dd;
                            document.getElementById("date").setAttribute("min", today);
                        </script>

                        <input type="submit" value="ตกลง">
                    </div>
                   
                    <hr>
                </div>
            </form>
        </div>


        <form action="../conn/conn_bookingstep2.php?cus_id=<?php echo $cus_id ?>&book_id=<?php echo $book_id ?>" method="POST">
            <?php if (isset($_GET['bookingdate'])) {
                $date = $_GET['bookingdate'];
               
            ?> <div>
                    <label class="pickdatestr"><i class="bi bi-calendar2-week"></i> &nbsp;วันที่เลือกจอง : <?php echo $date ?> </label>
                </div>
                <div class="container">
                 <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <input type="text" name="date" style="display:none" value="<?php echo $date?>">
                                    <?php
                                    $n = 1;
                                    include('../conn/conn.php');
                                    $query = mysqli_query($conn, "select * from nailer");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $nailerid = $row['nailer_id'];
                                    ?>
                                    <div class="col-md-6">
                                        <div class="card" id="nailer1">
                                            <div style="text-align:center;">
                                                <img src="<?php echo $row['nailer_picture']?>" class="img-fluid rounded-start" width="50%">
                                            </div>
                                            <p class="card-text">
                                                <p style="font-size: 24px; text-align:center;">
                                                <i class="fas fa-id-card"></i> &nbsp;&nbsp;<?php echo $row['nailer_name']; ?>
                                                </p>
                                                <a href=".." style="text-align:center;">กดเพื่อดูโปรไฟล์ช่างทำเล็บ</a>
                                            </p>
                                            <?php
                                            $arraytmend = array();
                                            $arraytmstr = array();
                                            $qr_allDetail = mysqli_query($conn, "select * from book_nail_detail WHERE nailer_id = $nailerid AND date = '$date'");
                                            while ($row_allDetail = mysqli_fetch_array($qr_allDetail)) {
                                            $allDetaildate = $row_allDetail['date'];
                                            $timestart = date("H", strtotime($row_allDetail['time_start']));
                                            $timeend =  date("H", strtotime($row_allDetail['time_end']));
                                            array_push($arraytmstr, $timestart);
                                            array_push($arraytmend, $timeend);
                                            }
                                            ?>

                                            <input type="radio" name="radionailer" value="<?php echo $row['nailer_id'] ?>" required>เลือกช่าง
                                            <hr>
                                            <label class="timenailer">วันเวลาของช่างทำเล็บ : </label>
                                            <div class="row">
                                                <div class="col">
                                                    <?php
                                                    $countertmstr = sizeof($arraytmstr);
                                                    $countertmend = sizeof($arraytmend);
                                                    $checktimestart = 10;
                                                        for ($i = 0; $i < 8; $i++) {
                                                            if ($i < $countertmstr) {
                                                                if ($checktimestart >= $arraytmstr[$i] && $arraytmend[$i] <= $checktimestart) { ?>
                                                                    <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required disabled>
                                                                    <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                                                                <?php
                                                                } else { ?>
                                                                    <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required>
                                                                    <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                                                                <?php }
                                                                } else { ?>
                                                                    <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php echo $checktimestart ?>" required>
                                                                    <label for="timeslot"><?php echo $checktimestart ?>:00 - <?php echo $checktimestart + 1 ?>:00</label><br>
                                                                <?php }
                                                                $checktimestart++;
                                                                ?>
                                                            <?php }
                                                            ?>
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            $n++
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4" style="width:100%">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a href="booking_nail.php">
                                <button id="btnback" type="button" class="btn btn-danger btn-xs">ย้อนกลับ</button>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="../booking/booking_payment.php">
                                <button id="btnnext" type="submit" class="btn btn-outline-danger btn-xs" type="button">หน้าถัดไป</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>

            <?php } ?>


            <?php include('../model/main_model.php'); ?>


            <div>
                <?php include('../footer.php'); ?>
            </div>
    </div>
    </form>
</body>

</html>