
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../css_user.css">
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/541e01753a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
        <?php include('../index_menubarnail.php'); ?> 
        <!-- Background image -->
</header><br><br><br><br>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10">
                <img src="../img/bg/bg-spa.png" class="d-block w-100">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="card mb-3">
                    <div class="row g-0">
                        <?php
                            include('../conn/conn.php');
                            $spa = "SELECT * FROM service_item WHERE S_ID = 6";
                            $query = mysqli_query($conn, $spa);
                            while ($rowspa = mysqli_fetch_array($query)) {
                                
                        ?>
                        <div class="col-md-4" id="img-spa">
                            <img src="<?php echo $rowspa['file'] ?>">
                        </div>
                        <div class="col-md-7" id="text-spa">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <p><i class="bi bi-flower2"></i>&nbsp;<?php echo $rowspa['name'] ?></p>
                                </h5>
                                <p class="card-text1"><?php echo $rowspa['detail'] ?></p>
                                <p class="card-text2">ราคา : <?php echo $rowspa['price'] ?> บาท เท่านั้น!</p>
                                <p class="card-text3"><small class="text-muted">(แถมฟรี ! ทำเล็บสีพื้นทั้งสปามือและสปาเท้า)</small></p>
                                
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    <?php }  ?>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row g-0">
                        <?php
                            include('../conn/conn.php');
                            $spa = "SELECT * FROM service_item WHERE S_ID = 7";
                            $query = mysqli_query($conn, $spa);
                            while ($rowspa = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-md-4" id="img-spa">
                            <img src="<?php echo $rowspa['file'] ?>">
                        </div>
                        <div class="col-md-7" id="text-spa">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <p><i class="bi bi-flower2"></i>&nbsp;<?php echo $rowspa['name'] ?></p>
                                </h5>
                                <p class="card-text1"><?php echo $rowspa['detail'] ?></p>
                                <p class="card-text2">ราคา : <?php echo $rowspa['price'] ?> บาท เท่านั้น!</p>
                                <p class="card-text3"><small class="text-muted">(แถมฟรี ! ทำเล็บสีพื้นทั้งสปามือและสปาเท้า)</small></p>
                                
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    <!-- <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row" id="card_edituser" >
                <div class="col-md-6">
                    <div class="card" id="user">
                    <div style="text-align:center;">
                        <img id="img" src="../img/icon/spa1.png"
                            style="width:70%; padding-top:20px;">
                        <div class="container" id="btnedit" style="padding-bottom:20px;"><br>
                            <p style="font-size:26px;">" สปามือ "</p>
                            <p style="font-size:16px;">" การทำสปามือเล็บ นอกจากจะช่วยผลัดเซลล์ผิวเก่าออกไปแล้ว ผิวดูสว่างใสมากขึ้น "</p>
                            <p style="font-size:18px;">ราคาเพียง 399 บาทเท่านั้น <br> ( ทาเล็บสีพื้น ฟรี !! )</p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" id="edit">
                    <div style="text-align:center;">
                        <img id="img" src="../img/icon/spa2.png"
                            style="width:70%; padding-top:20px;">
                        <div class="container" id="btnedit" style="padding-bottom:20px;"><br>
                            <p style="font-size:26px;">" สปาเท้า "</p>
                            <p style="font-size:16px;">" การทำสปามือเท้า ให้ความรู้สึกผ่อนคลาย ช่วยลดอาการกล้ามเนื้อล็อค ช่วยให้บริเวณฝ่ามือและเท้ามีความชุ่ม "</p>
                            <p style="font-size:18px;">ราคาเพียง 399 บาทเท่านั้น <br> ( ทาเล็บสีพื้น ฟรี !! ) </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br> -->

    <div class="row">
        <div class="col-5"></div>  
        <div class="col-2">            
            <a href="#login2" data-toggle="modal" class="btn btn-lg btn-warning" style="width:100%;">
                <span class="glyphicon glyphicon-edit"></span> จองเลย !
            </a>                       
        </div>
        <div class="col-5"></div>  
    </div>
    </div><br>


    <?php include('../model/main_model.php'); ?>
    
    <div>
        <?php include('../footer.php'); ?>
    </div>
    
</body>
</html>
