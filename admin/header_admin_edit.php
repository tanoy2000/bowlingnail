<?php include "../../session_edit.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="icon" type="image/x-icon" href="../../img/bowling-logo.svg" />
    <!-- Google font -->
    <link rel="stylesheet" href="../css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/541e01753a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <style>
    body {
    background-image: url('https://i.pinimg.com/564x/af/c2/10/afc21018708639dabcbb588ecee0f3a2.jpg');
    background-repeat: no-repeat;
    /* background-attachment: fixed; */
    background-size: 100% 100%;
    }
    </style>

</head>
<body>
    <?php
        $Key_id = null;
        if(isset($_POST["txtKeyword"])){
            $Key_id = $_POST["txtKeyword"];
        }
    ?>
    <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="menu">
        <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index/index_admin.php">
                <img src="../../img/logo.png" width="150" height="60" class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../show_user.php">จัดการข้อมูลสมาชิก</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../show_nailer.php">จัดการข้อมูลช่างทำเล็บ</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../editnail_HandOne/editnail_p.php">จัดการข้อมูลการบริการ</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../show_booking.php">ข้อมูลการจองของลูกค้า</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../show_record.php">ประวัติการจองของลูกค้า</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index/index.php">ออกจากระบบ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"> 
                    <button type="button" id="btn_status">
                        <?PHP
                            if(isset($_SESSION['username'])){
                                echo "ผู้ใช้งาน : ".$_SESSION['username'];
                            }else {  
                                echo "<script>alert('username or password is incorrect!')</script>";  
                                echo "<script>window.open('../../index/index.php','_self')</script>";  
                            }  
                        ?>
                    </button>
                    </a>
                </li>
            <ul>
        </div>
        </div>
    </nav>
    <!-- Navbar -->
    </header>
   
</body>
</html>