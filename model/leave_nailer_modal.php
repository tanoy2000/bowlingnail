<link rel="stylesheet" href="../css_modal.css">

<div class="modal fade" id="leave_nailer<?php echo $row['leave_id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="leave-header">
                <h4 class="modal-title" id="myModalLabel"><i class="bi bi-archive"></i> &nbsp;ยืนยันการลาของช่างทำเล็บ
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <?php
                include('../conn/conn.php');
                $payment = mysqli_query($conn, "select * from nailer_leave
                join nailer on nailer.nailer_id=nailer_leave.nailer_id
                where leave_id='" . $row['leave_id'] . "'");
                $row = mysqli_fetch_array($payment);
                ?>
                <div class="row">
                    <div class="col" id="leave-data">
                    <img class="img-responsive img-thumbnail" src="<?php echo $row['nailer_picture']; ?>" />
                    <hr>
                        <div class="row">
                            <div class="col-4">
                                <label>รหัสช่างทำเล็บ : </label>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['leave_id']; ?>  " name="nailer_id" Disabled>
                                <br>
                            </div><br>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>ชื่อช่างทำเล็บ : </label>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['nailer_name']; ?>  " name="nailer_name"
                                    Disabled> <br>
                            </div><br>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>ประเภทการลา : </label>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['leave_type']; ?>  " name="leave_type"
                                    Disabled> <br>
                            </div><br>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>วันที่เริ่มการลา : </label>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['leave_begin']; ?>  " name="leave_begin"
                                    Disabled> <br>
                            </div><br>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>วันที่สิ้นสุดการลา : </label>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['leave_end']; ?>  " name="leave_begin"
                                    Disabled> <br>
                            </div><br>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>หมายเหตุการลา : </label>
                            </div>
                            <div class="col-8">
                                <textarea name="description" id="leave_description">
                            <?php echo $row['leave_description']; ?></textarea>
                            </div>
                        </div><br><br>

                        <div class="row">
                            <div class="col">
                                <a
                                    href="../conn/conn_leave.php?leave_id=<?php echo $row['leave_id'] ?>&leavestatus_id=1">
                                    <button type="submit" class="btn btn-primary"
                                        style="float:right; margin-left:4px;">อนุมัติการลางาน</button></a>

                                <a
                                    href="../conn/conn_leave.php?leave_id=<?php echo $row['leave_id'] ?>&leavestatus_id=2">
                                    <button type="submit" class="btn btn-danger" style="float:right;">
                                        <span class="glyphicon glyphicon-remove"></span>ไม่อนุมัติการลางาน</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
