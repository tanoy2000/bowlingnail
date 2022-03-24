<link rel="stylesheet" href="../css_modal.css">
<!--ตะกร้าลายเล็บ -->
<div class="modal fade" id="booking<?php echo $row['ST_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class="bi bi-check2-square"></i> &nbsp;เลือกลายเล็บ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include('../conn/conn.php');
                $booking = mysqli_query($conn, "SELECT * from service_item
                        join nail_type on (nail_type.nt_id=service_item.nt_id)
                        join nail_set on (nail_set.ns_id=service_item.ns_id)
                        where ST_ID='" . $row['ST_ID'] . "'");
                $row = mysqli_fetch_array($booking);
                ?>

                <form enctype="multipart/form-data" action="../conn/conn_booking.php?ST_ID=<?php echo $row['ST_ID'] ?>&S_ID=<?php echo $row['S_ID'] ?>" method="POST">
                    <div class="row"  id="cart-nail">
                        <div class="col">
                            <img class="img-responsive img-thumbnail" src="<?php echo $row['file']; ?>" id="showpdimg" width="200px" class="imglogin" readonly><br>
                            <hr>
                            <div class="row">
                                <div class="col-4"><label>ชื่อลายเล็บ : </label><br></div>
                                <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['name']; ?>  " name="name" readonly></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label>รายละเอียด : </label><br></div>
                                <div class="col-8"><textarea name="detail" rows="3" placeholder="ชื่อรายละเอียด" readonly>&nbsp;<?php echo $row['detail']; ?></textarea></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label>ประเภทลายเล็บ : </label><br></div>
                                <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['ns_name']; ?>" name="nsname" readonly></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label>รูปแบบลายเล็บ : </label><br></div>
                                <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['nt_name']; ?>" name="ntname" readonly></div>
                            </div>

                            <div class="row">
                                <div class="col-4"><label>ราคา : </label><br></div>
                                <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['price']; ?>" name="price" maxlength='30' readonly></div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" id="">
                            <a href="../conn/conn_booking.php?ST_ID=<?php echo $row['ST_ID']; ?>">
                            
                            <button type="submit" class="btn btn-warning float-right"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; เพิ่มใส่ตะกร้า</button></a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

<!-- เลือกลายเล็บ -->
<div class="modal fade" id="delbook<?php echo $rowdetail['bd_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header" id="del-cart">
                    <h4 class="modal-title" id="myModalLabel"><i class="bi bi-bag-x"></i> &nbsp;คุณต้องการลบหรือไม่</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body" id="del-cart-data">                
                <?php
                $del = mysqli_query($conn, "select * from book_nail_detail where book_id='" . $rowdetail['book_id'] . "'");
                $row = mysqli_fetch_array($del);
                ?>
                <img class="img-responsive img-thumbnail" src="<?php echo $rowdetail['file']; ?>" />
                <hr>
                <div class="row">
                    <div class="col-4">
                        <label>ชื่อลายเล็บ : </label>
                    </div>
                    <div class="col-8">
                        <input type="text" value="&nbsp;<?php echo $rowdetail['name']; ?>  " name="name" Disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label>รายละเอียด : </label>
                    </div>
                    <div class="col-8">
                        <input type="text" value="&nbsp;<?php echo $rowdetail['detail']; ?>  " name="detail" Disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label>แบบเล็บ / เซต : </label>
                    </div>
                    <div class="col-8">
                        <input type="text" value="&nbsp;<?php echo $rowdetail['ns_name']; ?>  " name="ns_name" Disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label>ราคา : </label>
                    </div>
                    <div class="col-8">
                        <input type="text" value="&nbsp;<?php echo $rowdetail['price']; ?>  " name="price" Disabled>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <a href="../conn/conn_delbook.php?bd_id=<?php echo $rowdetail['bd_id']; ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span> ลบ</a>
            </div>
        </div>

    </div>
</div>
 
