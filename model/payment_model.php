<link rel="stylesheet" href="../css_modal.css">

<div class="modal fade" id="payment<?php echo $row['book_id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="confirm-header">
                <h4 class="modal-title" id="myModalLabel"><i class="bi bi-bag-check"></i> &nbsp;ยืนยันการจองคิว</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <?php
                include('../conn/conn.php');
                $payment=mysqli_query($conn,"select * from booking 
                join customer on customer.cus_id=booking.cus_id 
                where book_id='".$row['book_id']."'");
                $row=mysqli_fetch_array($payment);
            ?>
                <div class="row">
                    <div class="col" id="confirm-data">
                        <form enctype="multipart/form-data"
                            action="../conn/conn_payment.php?book_id=<?php echo $row['book_id']?>" method="POST">
                            <div class="row">
                                <div class="col-4">
                                    <label>รหัสลูกค้า : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" value="<?php echo $row['book_id']; ?>  " name="username"
                                        Disabled> <br>
                                </div><br>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <label>ชื่อลูกค้า : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" value="<?php echo $row['username']; ?>  " name="username"
                                        Disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <label>เบอร์โทรศัพท์ : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" value="<?php echo $row['tel']; ?>  " name="username" Disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <label>วัน/เวลาที่จอง : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" value="<?php echo $row['book_date']; ?>  " name="username"
                                        Disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <label>วันที่ชำระ : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" value="<?php echo $row['paid_time']; ?>  " name="username"
                                        Disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <label>สลิปการโอน : </label>
                                </div>
                                <div class="col-8">
                                    <img class="img-responsive img-thumbnail" src="<?php echo $row['slip']; ?>" id="showpdimg" alt="" width="150px">
                                </div>
                            </div><br><br>

                            <div class="row">
                                <div class="col" id="confirm-success">
                                    <a href="../conn/conn_payment.php?book_id=<?php echo $row['book_id']; ?>">
                                        <button type="submit" class="btn btn-primary"
                                            >ยืนยันการจอง
                                        </button>
                                    </a>

                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span>
                                        ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	