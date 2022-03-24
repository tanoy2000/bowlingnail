
<?php 
    $conn = mysqli_connect("localhost","root","","projectnail");
    $sql = "select distinct nt_name from nail_type";
    $res = mysqli_query($conn, $sql);
?>

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
    <div class="container" >  
            <div class="row" id="edit-nail">
                <div class="col-md-12">
                    <h2>จัดการข้อมูลการบริการ</h2>
                </div>
            </div>

            <div class="row">
                <div div class="col-md-2"></div>
                <div div class="col-md-8">
                    <form action="" method="post">
                        ประเภทลายเล็บ :&nbsp;&nbsp;
                        <select name="nailtype" onchange="selectNT()">
                            <?php while ($row = mysqli_fetch_array($res)){
                                ?>
                                <option value="<?php echo $row['nt_name'] ?>"><?php echo $row['nt_name'] ?></option>
                            <?php    
                            } 
                            ?>                            
                            <!-- <option value="เลือกข้อมูล">กรุณาเลือก..</option>
                            <option value="1">เล็บมือ</option>
                            <option value="2">เล็บเท้า</option>
                            <option value="3">สปามือ</option>
                            <option value="4">สปาเท้า</option> -->
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;

                        ต่อเล็บ/เซ็ท :&nbsp;&nbsp;
                        <select name="ต่อเล็บ/แบบเซ็ท" id="nail_set">
                            <option value="เลือกข้อมูล">กรุณาเลือก..</option>
                            <option value="1">ลายเล็บแบบต่อเล็บ</option>
                            <option value="2">ลายเล็บแบบเซต</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;

                        รูปแบบลายเล็บ :&nbsp;&nbsp;
                        <select name="รูปแบบลายเล็บ" id="nail_type2">
                            <option value="เลือกข้อมูล">กรุณาเลือก..</option>
                            <option value="1">เล็บสีพื้น</option>
                            <option value="2">เล็บเพ้นส์</option>
                            <option value="3">เล็บกลิตเตอร์</option>
                            <option value="4">เล็บสติ๊กเกอร์</option>
                            <option value="5">เล็บลูกแก้ว</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <button type="submit" class="btn btn-info">
                            ค้นหาลายเล็บ
                        </button>
                    </form>
                </div>     
                <div div class="col-md-2"></div> 
            </div>


            <center>
                <a href="#add_data" class="btn btn-warning" data-toggle="modal">+ เพิ่มข้อมูลลายเล็บ</a>
            </center><br>
            
            <div class="row">
                <div div class="col-md-12">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                        <table class="table table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">รูปภาพ</th>
                                    <th scope="col">รหัสสินค้า</th>
                                    <th scope="col">ชื่อลายเล็บ</th>
                                    <th scope="col">รายละเอียด</th>
                                    <th scope="col">รูปแบบ</th>
                                    <th scope="col">ประเภท</th>
                                    <th scope="col">ต่อเล็บ/เซต</th>
                                    <th scope="col">ราคา</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            <tbody id="result">
                                <?php
                                        include('../conn/conn.php');
                                        $n=1;
                                        $query=mysqli_query($conn,"select * from service_item 
                                            join service_type on (service_type.S_ID=service_item.S_ID)
                                            join nail_type on (nail_type.nt_id=service_item.nt_id)
                                            join nail_set on (nail_set.ns_id=service_item.ns_id) ");
                                        while($row=mysqli_fetch_array($query)){
                                            ?>
                                <tr>
                                    <td scope="row" data-label="ลำดับ :"><?php echo $n ?></td>
                                    <td data-label="รูปภาพ :">
                                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file'] ?>" />
                                    </td>
                                    <td data-label="รหัสสินค้า :"><?php echo $row['ST_ID']; ?></td>
                                    <td data-label="ชื่อลายเล็บ :"><?php echo $row['name']; ?></td>
                                    <td data-label="รายละเอียด :"><?php echo $row['detail']; ?></td>
                                    <td data-label="รูปแบบ :"><?php echo $row['S_name']; ?></td>
                                    <td data-label="ประเภท :"><?php echo $row['nt_name']; ?></td>
                                    <td data-label="ต่อเล็บ/เซต :"><?php echo $row['ns_name']; ?></td>
                                    <td data-label="ราคา :"><?php echo $row['price']; ?></td>
                                    <td data-label="edit">
                                        <span>
                                            <a href="#edit<?php echo $row['ST_ID']; ?>" data-toggle="modal"
                                                class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> แก้ไข</a>

                                            <a href="#del<?php echo $row['ST_ID']; ?>" data-toggle="modal" class="btn btn-danger">
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
                        <div class="col-1"></div>
                    </div>
                </div>
            </div><br>
    </div>
        <?php include('../model/main_model.php'); ?>
    </div>

   
</body>
</html>