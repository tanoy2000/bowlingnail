<link rel="stylesheet" href="../css_modal.css">

<!-- del_user -->
<div class="modal fade" id="del<?php echo $row['cus_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="delete-user">
                <h4 class="modal-title" id="myModalLabel"><i class="bi bi-person-dash"></i> &nbsp;ลบข้อมูลสมาชิก</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <?php
                $deluser=mysqli_query($conn,"select * from customer where cus_id='".$row['cus_id']."'");
                $row=mysqli_fetch_array($deluser);
			?>
                <div class="row">
                    <div class="col" id="delete-data-user">
                    <img class="img-responsive img-thumbnail" src="<?php echo $row['file']; ?>" />
                    <hr>
                        <div class="row">
                            <div class="col-4">
                                <label style="float:right">ชื่อสมาชิก : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['cus_id']; ?>  " name="name" Disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label style="float:right">ชื่อสมาชิก : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['username']; ?>  " name="name" Disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label style="float:right">อีเมล : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['email']; ?>  " name="name" Disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label style="float:right">เบอร์โทรศัพท์ : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['tel']; ?>  " name="name" Disabled>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                            <a href="../conn/conn_del_user.php?cus_id=<?php echo $row['cus_id']; ?>"
                                class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> ลบ</a>
                        </div>
                        <div style="height:10px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
