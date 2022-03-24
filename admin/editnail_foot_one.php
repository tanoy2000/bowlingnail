<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../header_admin.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling Nail & Spa. | ร้านทำเล็บและสปา</title>
    <link rel="icon" type="image/x-icon" href="../img/bowling-logo.svg" />
    <!-- Google font -->
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../css_admin.css">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../table_card.css">
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
    <script type="text/javascript" src="../function/ShowNail.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
    <div class="container-fluid">
    <div class="row" id="edit-nail">
        <div class="col-md-12">
            <h2>จัดการข้อมูลการบริการ</h2>
        </div>
    </div><br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10" id="btn_editnail">
            <ul>
                <li><a href="editnail_hand_one.php">
                        <img src="../img/icon/nail_p.png" width="30" height="30">ลายเล็บมือแบบ 1 นิ้ว
                    </a>
                </li>
                <li><a href="editnail_hand_set.php">
                        <img src="../img/icon/nail_paint.png" width="30" height="30">ลายเล็บมือแบบเซต
                    </a>
                </li>
                <li><a class="active" href="editnail_foot_one.php">
                        <img src="../img/icon/nail_gt.png" width="30" height="30">ลายเล็บเท้าแบบ 1 นิ้ว
                    </a>
                </li>
                <li><a href="editnail_foot_set.php">
                        <img src="../img/icon/nail_stg.png" width="30" height="30">ลายเล็บเท้าแบบเซต
                    </a>
                </li>
                <li><a href="show_spa.php">
                        <img src="../img/icon/nail_spa.png" width="30" height="30"> สปามือและสปาเท้า
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-1"></div>
    </div><br>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="add_datanail">
            <img src="../img/icon/nail_p.png" width="20" height="20">&nbsp;&nbsp; ลายเล็บสีพื้น
            <a href="#add_data" class="btn" data-toggle="modal"><i class="bi bi-plus-circle"></i> เพิ่มข้อมูลลายเล็บ</a>
            <hr>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div div class="col-md-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-striped table-hover" width="100%">
                            <thead>
                                <th scope="col" width="5%">ลำดับ</th>
                                <th scope="col" width="5%">รูปภาพ</th>
                                <th scope="col" width="10%">รหัสสินค้า</th>
                                <th scope="col" width="10%">ชื่อลายเล็บ</th>
                                <th scope="col" width="15%">รายละเอียด</th>
                                <th scope="col" width="10%">รูปแบบ</th>
                                <th scope="col" width="10%">ประเภท</th>
                                <th scope="col" width="10%">ต่อเล็บ/เซต</th>
                                <th scope="col" width="5%">ราคา</th>
                                <th scope="col" width="12%"></th>
                            </thead>

                            <tbody id="result">
                                <?php
                                    include('../conn/conn.php');
                                    $n=1;
                                    $query=mysqli_query($conn,"SELECT * FROM service_item 
                                    INNER join service_type on service_type.S_ID=service_item.S_ID
                                    INNER join nail_type on nail_type.nt_id=service_item.nt_id
                                    INNER join nail_set on nail_set.ns_id=service_item.ns_id
                                    WHERE service_item.S_ID = 1 and service_item.nt_id = 2 and service_item.ns_id = 1");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                <tr>
                                    <td scope="row" data-label="ลำดับ"><?php echo $n ?></td>
                                    <td data-label="รูปภาพ">
                                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file'] ?>" />
                                    </td>
                                    <td data-label="รหัสสินค้า"><?php echo $row['ST_ID']; ?></td>
                                    <td data-label="ชื่อสินค้า"><?php echo $row['name']; ?></td>
                                    <td data-label="รายละเอียด"><?php echo $row['detail']; ?></td>
                                    <td data-label="รูปแบบ"><?php echo $row['S_name']; ?></td>
                                    <td data-label="ประเภท"><?php echo $row['nt_name']; ?></td>
                                    <td data-label="ต่อเล็บ/เซต"><?php echo $row['ns_name']; ?></td>
                                    <td data-label="ราคา"><?php echo $row['price']; ?></td>
                                    <td data-label="">
                                        <span>
                                            <a href="#edit<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>
                                                แก้ไข</a>

                                            <a href="#del<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span>ลบ </a>
                                            <?php include('../model/main_edit_del.php'); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php
                                            $n++;
                                            }                
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="add_datanail">
            <img src="../img/icon/nail_paint.png" width="20" height="20">&nbsp;&nbsp; ลายเล็บสีเพ้นท์
            <a href="#add_data" class="btn" data-toggle="modal"><i class="bi bi-plus-circle"></i> เพิ่มข้อมูลลายเล็บ</a>
            <hr>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div div class="col-md-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-striped table-hover" width="100%">
                            <thead>
                                <th scope="col" width="5%">ลำดับ</th>
                                <th scope="col" width="5%">รูปภาพ</th>
                                <th scope="col" width="10%">รหัสสินค้า</th>
                                <th scope="col" width="10%">ชื่อลายเล็บ</th>
                                <th scope="col" width="15%">รายละเอียด</th>
                                <th scope="col" width="10%">รูปแบบ</th>
                                <th scope="col" width="10%">ประเภท</th>
                                <th scope="col" width="10%">ต่อเล็บ/เซต</th>
                                <th scope="col" width="5%">ราคา</th>
                                <th scope="col" width="12%"></th>
                            </thead>

                            <tbody id="result">
                                <?php
                                    include('../conn/conn.php');
                                    $n=1;
                                    $query=mysqli_query($conn,"SELECT * FROM service_item 
                                    INNER join service_type on service_type.S_ID=service_item.S_ID
                                    INNER join nail_type on nail_type.nt_id=service_item.nt_id
                                    INNER join nail_set on nail_set.ns_id=service_item.ns_id
                                    WHERE service_item.S_ID = 2 and service_item.nt_id = 2 and service_item.ns_id = 1");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                <tr>
                                    <td scope="row" data-label="ลำดับ"><?php echo $n ?></td>
                                    <td data-label="รูปภาพ">
                                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file'] ?>" />
                                    </td>
                                    <td data-label="รหัสสินค้า"><?php echo $row['ST_ID']; ?></td>
                                    <td data-label="ชื่อสินค้า"><?php echo $row['name']; ?></td>
                                    <td data-label="รายละเอียด"><?php echo $row['detail']; ?></td>
                                    <td data-label="รูปแบบ"><?php echo $row['S_name']; ?></td>
                                    <td data-label="ประเภท"><?php echo $row['nt_name']; ?></td>
                                    <td data-label="ต่อเล็บ/เซต"><?php echo $row['ns_name']; ?></td>
                                    <td data-label="ราคา"><?php echo $row['price']; ?></td>
                                    <td data-label="">
                                        <span>
                                            <a href="#edit<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>
                                                แก้ไข</a>

                                            <a href="#del<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span>ลบ </a>
                                            <?php include('../model/main_edit_del.php'); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php
                                            $n++;
                                            }                
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="add_datanail">
            <img src="../img/icon/nail_gt.png" width="20" height="20">&nbsp;&nbsp; ลายเล็บกลิตเตอร์
            <a href="#add_data" class="btn" data-toggle="modal"><i class="bi bi-plus-circle"></i> เพิ่มข้อมูลลายเล็บ</a>
            <hr>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div div class="col-md-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-striped table-hover" width="100%">
                            <thead>
                                <th scope="col" width="5%">ลำดับ</th>
                                <th scope="col" width="5%">รูปภาพ</th>
                                <th scope="col" width="10%">รหัสสินค้า</th>
                                <th scope="col" width="10%">ชื่อลายเล็บ</th>
                                <th scope="col" width="15%">รายละเอียด</th>
                                <th scope="col" width="10%">รูปแบบ</th>
                                <th scope="col" width="10%">ประเภท</th>
                                <th scope="col" width="10%">ต่อเล็บ/เซต</th>
                                <th scope="col" width="5%">ราคา</th>
                                <th scope="col" width="12%"></th>
                            </thead>

                            <tbody id="result">
                                <?php
                                    include('../conn/conn.php');
                                    $n=1;
                                    $query=mysqli_query($conn,"SELECT * FROM service_item 
                                    INNER join service_type on service_type.S_ID=service_item.S_ID
                                    INNER join nail_type on nail_type.nt_id=service_item.nt_id
                                    INNER join nail_set on nail_set.ns_id=service_item.ns_id
                                    WHERE service_item.S_ID = 3 and service_item.nt_id = 2 and service_item.ns_id = 1");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                <tr>
                                    <td scope="row" data-label="ลำดับ"><?php echo $n ?></td>
                                    <td data-label="รูปภาพ">
                                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file'] ?>" />
                                    </td>
                                    <td data-label="รหัสสินค้า"><?php echo $row['ST_ID']; ?></td>
                                    <td data-label="ชื่อสินค้า"><?php echo $row['name']; ?></td>
                                    <td data-label="รายละเอียด"><?php echo $row['detail']; ?></td>
                                    <td data-label="รูปแบบ"><?php echo $row['S_name']; ?></td>
                                    <td data-label="ประเภท"><?php echo $row['nt_name']; ?></td>
                                    <td data-label="ต่อเล็บ/เซต"><?php echo $row['ns_name']; ?></td>
                                    <td data-label="ราคา"><?php echo $row['price']; ?></td>
                                    <td data-label="">
                                        <span>
                                            <a href="#edit<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>
                                                แก้ไข</a>

                                            <a href="#del<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span>ลบ </a>
                                            <?php include('../model/main_edit_del.php'); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php
                                            $n++;
                                            }                
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="add_datanail">
            <img src="../img/icon/nail_stg.png" width="20" height="20">&nbsp;&nbsp; ลายเล็บสติ๊กเกอร์
            <a href="#add_data" class="btn" data-toggle="modal"><i class="bi bi-plus-circle"></i> เพิ่มข้อมูลลายเล็บ</a>
            <hr>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div div class="col-md-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-striped table-hover" width="100%">
                            <thead>
                                <th scope="col" width="5%">ลำดับ</th>
                                <th scope="col" width="5%">รูปภาพ</th>
                                <th scope="col" width="10%">รหัสสินค้า</th>
                                <th scope="col" width="10%">ชื่อลายเล็บ</th>
                                <th scope="col" width="15%">รายละเอียด</th>
                                <th scope="col" width="10%">รูปแบบ</th>
                                <th scope="col" width="10%">ประเภท</th>
                                <th scope="col" width="10%">ต่อเล็บ/เซต</th>
                                <th scope="col" width="5%">ราคา</th>
                                <th scope="col" width="12%"></th>
                            </thead>

                            <tbody id="result">
                                <?php
                                    include('../conn/conn.php');
                                    $n=1;
                                    $query=mysqli_query($conn,"SELECT * FROM service_item 
                                    INNER join service_type on service_type.S_ID=service_item.S_ID
                                    INNER join nail_type on nail_type.nt_id=service_item.nt_id
                                    INNER join nail_set on nail_set.ns_id=service_item.ns_id
                                    WHERE service_item.S_ID = 4 and service_item.nt_id = 2 and service_item.ns_id = 1");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                <tr>
                                    <td scope="row" data-label="ลำดับ"><?php echo $n ?></td>
                                    <td data-label="รูปภาพ">
                                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file'] ?>" />
                                    </td>
                                    <td data-label="รหัสสินค้า"><?php echo $row['ST_ID']; ?></td>
                                    <td data-label="ชื่อสินค้า"><?php echo $row['name']; ?></td>
                                    <td data-label="รายละเอียด"><?php echo $row['detail']; ?></td>
                                    <td data-label="รูปแบบ"><?php echo $row['S_name']; ?></td>
                                    <td data-label="ประเภท"><?php echo $row['nt_name']; ?></td>
                                    <td data-label="ต่อเล็บ/เซต"><?php echo $row['ns_name']; ?></td>
                                    <td data-label="ราคา"><?php echo $row['price']; ?></td>
                                    <td data-label="">
                                        <span>
                                            <a href="#edit<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>
                                                แก้ไข</a>

                                            <a href="#del<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span>ลบ </a>
                                            <?php include('../model/main_edit_del.php'); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php
                                            $n++;
                                            }                
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="add_datanail">
            <img src="../img/icon/nail_lk.png" width="20" height="20">&nbsp;&nbsp; ลายเล็บลูกแก้ว
            <a href="#add_data" class="btn" data-toggle="modal"><i class="bi bi-plus-circle"></i> เพิ่มข้อมูลลายเล็บ</a>
            <hr>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div div class="col-md-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-striped table-hover" width="100%">
                            <thead>
                                <th scope="col" width="5%">ลำดับ</th>
                                <th scope="col" width="5%">รูปภาพ</th>
                                <th scope="col" width="10%">รหัสสินค้า</th>
                                <th scope="col" width="10%">ชื่อลายเล็บ</th>
                                <th scope="col" width="15%">รายละเอียด</th>
                                <th scope="col" width="10%">รูปแบบ</th>
                                <th scope="col" width="10%">ประเภท</th>
                                <th scope="col" width="10%">ต่อเล็บ/เซต</th>
                                <th scope="col" width="5%">ราคา</th>
                                <th scope="col" width="12%"></th>
                            </thead>

                            <tbody id="result">
                                <?php
                                    include('../conn/conn.php');
                                    $n=1;
                                    $query=mysqli_query($conn,"SELECT * FROM service_item 
                                    INNER join service_type on service_type.S_ID=service_item.S_ID
                                    INNER join nail_type on nail_type.nt_id=service_item.nt_id
                                    INNER join nail_set on nail_set.ns_id=service_item.ns_id
                                    WHERE service_item.S_ID = 5 and service_item.nt_id = 2 and service_item.ns_id = 1");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                <tr>
                                    <td scope="row" data-label="ลำดับ"><?php echo $n ?></td>
                                    <td data-label="รูปภาพ">
                                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file'] ?>" />
                                    </td>
                                    <td data-label="รหัสสินค้า"><?php echo $row['ST_ID']; ?></td>
                                    <td data-label="ชื่อสินค้า"><?php echo $row['name']; ?></td>
                                    <td data-label="รายละเอียด"><?php echo $row['detail']; ?></td>
                                    <td data-label="รูปแบบ"><?php echo $row['S_name']; ?></td>
                                    <td data-label="ประเภท"><?php echo $row['nt_name']; ?></td>
                                    <td data-label="ต่อเล็บ/เซต"><?php echo $row['ns_name']; ?></td>
                                    <td data-label="ราคา"><?php echo $row['price']; ?></td>
                                    <td data-label="">
                                        <span>
                                            <a href="#edit<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>
                                                แก้ไข</a>

                                            <a href="#del<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span>ลบ </a>
                                            <?php include('../model/main_edit_del.php'); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php
                                            $n++;
                                            }                
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div><br>
    <?php include('../model/main_model.php'); ?>
    </div>                                         
   
</body>
</html>