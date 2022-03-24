<!--Edit ลายเล็บ -->
<div class="modal fade" id="booking<?php echo $row['ST_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel">จองลายเล็บ</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include('../conn/conn.php');
                $booking = mysqli_query($conn, "select * from service_item where ST_ID='" . $row['ST_ID'] . "'");
                $row = mysqli_fetch_array($booking);
                ?>

                <form enctype="multipart/form-data" action="../conn/conn_booking.php?ST_ID=<?php echo $row['ST_ID'] ?>" method="POST">
                    <div class="row">
                        <div class="col">
                            <img src="<?php echo $row['file']; ?>" style="display:inline;" id="showpdimg" width="150px" class="imglogin">
                            <div style="height:10px;"></div>
                            <p><strong> ชื่อลายเล็บ : </strong><?php echo $row['name']; ?></p>
                            <p><strong> รายละเอียด : </strong><?php echo $row['detail']; ?></p>
                            <p><strong> ราคา : </strong><?php echo $row['price']; ?></p>
                        </div>
                    </div>

                    <div style="height:10px;"></div>

                    <div class="row">
                        <div class="col">
                            <a href="../conn/conn_booking.php?ST_ID=<?php echo $row['ST_ID']; ?>">
                                <button type="submit" class="btn btn-warning" style="float:right; margin-left:4px;">จองลายเล็บ</button></a>

                            <button type="button" class="btn btn-danger" style="float:right;" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                        </div>
                    </div>

                    <div style="height:10px;"></div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

