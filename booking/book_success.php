<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../css_user.css">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../css_breadcrumb.css">
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
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
        <style>
    .myDiv{
	display:none;
    padding:30px;
    }  
    #showOne{
        border:1px solid red;
    }
    #showTwo{
        border:1px solid green;
    }
    #showThree{
        border:1px solid blue;
    }
    </style>
    
    <script>
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            var value = $(this).val(); 
            $("div.myDiv").hide();
            $("#show"+value).show();
        });
    });
    </script>
        
</head>
<body>
<header>
    <div>
            <?php include('../header_menubarnail.php'); ?>
            <?php include('../conn/conn_success.php');?>
    </div>
</header><br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col" id="success-header">
                <p>ยืนยันการจองเสร็จสิ้น</p>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" id="success-img">
            <!-- <i class="bi bi-check-circle-fill"></i> -->
            <img src="../img/check.png">
        <div class="col-md-4"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" id="success-p">
            <!-- <i class="bi bi-check-circle-fill"></i> -->
            <p>โปรดตรวจสอบสถานะการจองของท่านได้ที่เมนู "สถานะการจอง"</p>
        <div class="col-md-4"></div>
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 " id="success-btn">
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="../header/header_user.php"><button type="button" class="btn btn-success">กลับสู่หน้าหลัก</button></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="../user/user_booking.php"><button type="button" class="btn btn-warning">สถานะการจอง</button></a>
            </div>
        </div>
        <div class="col-md-4"></div>
    
    </div><br><br><br>
</body>
</html>
