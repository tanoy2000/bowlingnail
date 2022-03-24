<!-- edit_nailer -->
<div class="modal fade" id="editprofilenailer<?php echo $row['nailer_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" id="edit-nailer">
            <h4 class="modal-title" id="myModalLabel"><i class="bi bi-person-rolodex"></i> &nbsp;แก้ไขข้อมูลช่างทำเล็บ</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            <?php
            include('../conn/conn.php');
                $nailer_id = $row['nailer_id']; 
                $editprofilenailer=mysqli_query($conn,"select * from nailer where nailer_id='".$nailer_id ."'");
                $row=mysqli_fetch_array($editprofilenailer);
			?>
            <div class="row">
                <div class="col" id="edit-nailer-data">
                    <form enctype="multipart/form-data" action="../conn/conn_edit_nailer.php?nailer_id=<?php echo $row["nailer_id"]?>" method="POST">
                        <img src="<?php echo $row['nailer_picture']; ?>" class="card-img-top rounded-circle" 
                         id="showpdimg" width="50px" class="imglogin">

                        <input type="file" id="file" name="nailer_picture">
                        <hr>
                        <div class="row">
                            <div class="col-4"><label>รหัสช่างทำเล็บ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row['nailer_id']; ?>" name="nailer_id" readonly></div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label>ชื่อช่างทำเล็บ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row['nailer_name']; ?>" name="nailer_name" maxlength='30' required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label>ชื่อ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row['fname']; ?>" name="fname" maxlength='50' required></div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label>นามสกุล : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row['lname']; ?>" name="lname" maxlength='50' required></div>
                        </div>
                 
                        <div class="row">
                            <div class="col-4"><label>โทรศัพท์ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row['nailer_tel'] ?>" name="nailer_tel" maxlength='10' required></div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                                <button type="submit" class="btn btn-success float-right"
                                    style="margin-right:10px">บันทึกข้อมูล</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
