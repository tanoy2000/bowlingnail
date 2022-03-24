
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../css_user.css">
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
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
<header>
    <div>
        <?php include('../header_menuuser.php'); ?>   
    </div>
</header>

    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" id="user-header">
                <p>ข้อมูลส่วนตัว</p>
                <h6>ร้านทำเล็บ Bowling Nail and Spa.</h6>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <?php 
                $cus_id =  $_SESSION["cus_id"];
                include('../conn/conn.php');
                $query = "SELECT * FROM customer WHERE cus_id='$cus_id' ";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) { 
                    $cus_id = $row['cus_id'];
            ?>

        </div>
        <div class="col-8">
            <div class="row" id="user_profile">
            <div class="card h-80" id="header-card">
            <img src="<?php echo $row["file"] ?>" width="300px" height="300px" class="card-img-top rounded-circle" />

                <div class="card">
                <div class="card-body">
                    <form action="conn/conn_edit_profile.php?cus_id=<?php echo $cus_id ?>" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-3" id="text-header">
                            <label>รหัสสมาชิก : </label><br>
                        </div>
                        <div class="col-9">
                            <input class="form-control input-lg" type="text" 
                            value="<?php echo $row['cus_id']; ?> " size="5" name="cus_id" Disabled>
                        </div><br><br>

                        <div class="col-3" id="text-header">
                            <label>ชื่อผู้ใช้ : </label><br>
                        </div>
                        <div class="col-9">
                            <input class="form-control input-lg" type="text" 
                            value="<?php echo $row['username']; ?> " size="30" name="username" Disabled>
                        </div><br><br>

                        <div class="col-3" id="text-header">
                            <label>ชื่อ : </label><br>
                        </div>
                        <div class="col-9">
                            <input class="form-control input-lg" class="form-control input-lg" 
                            value="<?php echo $row['fname']; ?>" size="30" name="fname" Disabled>
                        </div><br><br>

                        <div class="col-3" id="text-header">
                            <label>นามสกุล : </label><br>
                        </div>
                        <div class="col-9">
                            <input class="form-control input-lg" class="form-control input-lg" 
                            value="<?php echo $row['lname']; ?>" size="30" name="lname" Disabled>
                        </div><br><br>

                        <div class="col-3" id="text-header">
                            <label>อีเมล: </label><br>
                        </div>
                        <div class="col-9">
                            <input class="form-control input-lg" class="form-control input-lg" type="text" 
                            value="<?php echo $row['email']; ?> " size="30" name="email" Disabled>
                        </div><br><br>
                        
                        <div class="col-3" id="text-header">
                            <label>เบอร์โทรศัพท์ : </label><br>
                        </div>
                        <div class="col-9">
                            <input class="form-control input-lg" type="text" 
                            value="<?php echo $row['tel']; ?> " size="30" name="tel" Disabled>
                        </div><br><br>
                    </div>   
                    </form>
                    <?php
                        ;
                        } 
                    ?>
                </div>
                </div>
            </div>               
            </div>                
        </div> 
        <div class="col-2"></div>
    </div><br><br>

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="../header/header_user.php">
                <button id="btnback" type="button" class="btn btn-secondary btn-md">กลับสู่หน้าหลัก</button>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#editprofile<?php echo $cus_id ?>" data-toggle="modal">
                    <button type="button"  class="btn btn-warning btn-md" type="button">
                        แก้ไขข้อมูล</button>   
                </a>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    <br><br>

    <?php include('../model/main_model.php'); ?> 
    
</body>
</html>

