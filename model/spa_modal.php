<link rel="stylesheet" href="../css_modal.css">

<!-- ตะกร้าสปา -->
<div class="modal fade" id="spa<?php echo $rowspa['ST_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        <img src="../img/icon/nail_spa.png">&nbsp; สปามือและเท้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">                
            <?php
                include('../conn/conn.php');
                $spa = mysqli_query($conn, "SELECT * from service_item where ST_ID='" . $rowspa['ST_ID'] . "'");
                $rowspa = mysqli_fetch_array($spa);
                ?>
               <form enctype="multipart/form-data" action="../conn/conn_spa.php?ST_ID=<?php echo $rowspa['ST_ID'] ?>&S_ID=<?php echo $rowspa['S_ID'] ?>" method="POST">
                    <div class="row">
                        <div class="col" id="spa-data">
                            <img src="<?php echo $rowspa['file']; ?>" id="showpdimg" class="imglogin"><br>
                            <hr>
                            <div class="row">
                                <div class="col-4"><label>ชื่อสินค้า : </label><br></div>
                                <div class="col-8"><input type="text" value="<?php echo $rowspa['name']; ?>" name="name" readonly></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label>รายละเอียด : </label><br></div>
                                <div class="col-8"><textarea name="detail" rows="3" placeholder="ชื่อรายละเอียด" readonly><?php echo $rowspa['detail']; ?></textarea></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label>ราคา : </label><br></div>
                                <div class="col-8"><input type="text" value="<?php echo $rowspa['price']; ?>" name="cus_price" maxlength='30' readonly>&nbsp;บาท </div>
                            </div>
                        </div>
                    </div>
                    <div></div>

                    <hr>
                    <div class="row">
                        <div class="col" id="btn-success-spa">
                            <a href="../conn/conn_spa.php?ST_ID=<?php echo $rowspa['ST_ID']; ?>">
                            <button type="submit" class="btn btn-warning"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; เพิ่มใส่ตะกร้า</button></a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- เลือกสปา -->
<div class="modal fade" id="spa<?php echo $rowdetail['bd_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel">คุณต้องการลบหรือไม่</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">                

                <?php
                $del = mysqli_query($conn, "select * from book_nail_detail where book_id='" . $rowspa['book_id'] . "'");
                $rowspa = mysqli_fetch_array($del);
                ?>

                <div class="row">
                    <h5><img class="img-responsive img-thumbnail" width="40%" style="border-color: black; box-shadow: black 2px 2px 2px" src="<?php echo $rowdspa['file']; ?>" /></strong></h5>
                </div><br>

                <div class="row">

                    <div class="col-8">
                    <div class="col-4"><label style="float:right">ชื่อลายเล็บ : </label><br></div>
                        <input type="text" value="<?php echo $rowspa['name']; ?>  " name="name" Disabled>
                    </div>
                </div>

                <div class="row">

                    <div class="col-8">
                        <input type="text" value="<?php echo $rowspa['detail']; ?>  " name="name" Disabled>
                    </div>
                </div>

                <div class="row">

                    <div class="col-8">
                        <input type="text" value="<?php echo $rowdspa['price']; ?>  " name="name" Disabled>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">

                <a href="../conn/conn_spa.php?bd_id=<?php echo $rowspa['bd_id']; ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span> ลบ</a>
            </div>
        </div>

    </div>
</div>
 
<!-- สปาเท้า -->
<div class="modal fade" id="spa<?php echo $rowspa2['ST_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">                
            <?php
                include('../conn/conn.php');
                $spa3 = mysqli_query($conn, "SELECT * from service_item where ST_ID='" . $rowspa2['ST_ID'] . "'");
                $rowspa3 = mysqli_fetch_array($spa3);
                ?>
               <form enctype="multipart/form-data" action="../conn/conn_spa.php?ST_ID=<?php echo $rowspa3['ST_ID'] ?>&s_id=<?php echo $rowspa3['S_ID'] ?>" method="POST">
                    <div class="row">

                        <div class="col">
                            <img src="<?php echo $rowspa3['file']; ?>" style="display:block; margin:auto;" id="showpdimg" width="200px" class="imglogin"><br>
                            <div class="row">
                                <div class="col-4"><label style="float:right">ชื่อลายเล็บ : </label><br></div>
                                <div class="col-8"><input type="text" value="<?php echo $rowspa3['name']; ?>  " name="name"></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label style="float:right">รายละเอียด : </label><br></div>
                                <div class="col-8"><textarea name="detail" rows="3" placeholder="ชื่อรายละเอียด"><?php echo $rowspa3['detail']; ?></textarea></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label style="float:right">ราคา : </label><br></div>
                                <div class="col-8"><input type="text" value="<?php echo $rowspa3['price']; ?>" name="price" maxlength='30'></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <a href="../conn/conn_spa.php?ST_ID=<?php echo $rowspa3['ST_ID']; ?>">
                                <button type="submit" class="btn btn-warning" style="float:right; margin-left:4px;"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; เพิ่มใส่ตะกร้า</button></a>

                            <button type="button" class="btn btn-danger" style="float:left;" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

