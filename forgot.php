<?php include "../session.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="icon" type="image/x-icon" href="img/bowling-logo.svg" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
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
                <a class="navbar-brand" href="../index/index_user.php">
                <img src="img/logo.png" alt="" width="120" height="50" class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg justify-content-md-end">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ลายเล็บมือ
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">ลายสีพื้น</a>
                    <a class="dropdown-item" href="#">ลายเพ้นท์</a>
                    <a class="dropdown-item" href="#">ลายกลิตเตอร์</a>
                    <a class="dropdown-item" href="#">ลายสติ๊กเกอร์</a>
                    <a class="dropdown-item" href="#">ลายลูกแก้ว</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ลายเล็บเท้า
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">ลายสีพื้น</a>
                    <a class="dropdown-item" href="#">ลายเพ้นท์</a>
                    <a class="dropdown-item" href="#">ลายกลิตเตอร์</a>
                    <a class="dropdown-item" href="#">ลายสติ๊กเกอร์</a>
                    <a class="dropdown-item" href="#">ลายลูกแก้ว</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index/index_spa.php">สปามือและเท้า</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="..">ติดต่อเรา</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/index.php">ออกจากระบบ</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" >
                    <button type="button" id="btn_status">
                    <?PHP
                        if(isset($_SESSION['username'])){
                            echo "User : ".$_SESSION['username'];
                        }else{  
                            echo "<script>alert('username or password is incorrect!')</script>";  
                            echo "<script>window.open('../index/index.php','_self')</script>";  
                        }  
                    ?>
                    </button>
                </a>
            </li>
            </ul>
        </div>
        </nav>
    </nav>
        <!-- Navbar -->

        <div class="row">
            <div class="forgot">
                <p>ลืมรหัสผ่าน</p>
                อีเมล์ : <input type="text" name="name" placeholder="E-mail">
                รหัสผ่านใหม่ : <input type="text" name="password" placeholder="New password">
                
            </div>
    </div>
    </div>
    </header>
    
</body>
</html>
