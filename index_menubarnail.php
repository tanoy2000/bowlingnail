<?php include "../session.php" ?>
<?php include '../conn/conn.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../css_modal.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <style>
    body {
    background-image: url('https://i.pinimg.com/564x/af/c2/10/afc21018708639dabcbb588ecee0f3a2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% ;
    }
    </style>
        
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light color-dark shadow-sm fixed-top rounded" id="menu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10"
                aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">
                        <img src="../img/logo.png" width="150" height="60" class="d-inline-block align-text-top">
                    </a>
                </div>
            </nav>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample10">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index/index_nail.php">แนะนำลายเล็บ</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index/index_spa.php">สปามือและเท้า</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger"
                            href="../index/index_profile_nailer.php">โปรไฟล์ช่างทำเล็บ</a></li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" href="#login2">
                            <button type="button" id="btnlogin">
                                เข้าสู่ระบบ
                            </button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" href="#register2">
                            <button type="button" id="btnregis">
                                ลงทะเบียน ?
                            </button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>