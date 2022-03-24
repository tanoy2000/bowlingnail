<div class="modal fade" id="nailer_edit<?php echo $rownailer['nailer_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="edit-nailer">
                <h4 class="modal-title" id="myModalLabel"> &nbsp;แก้ไขข้อมูลส่วนตัวช่างทำเล็บ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <?php
                $nailer_id = $rownailer['nailer_id'];
                $profilenailer1 = mysqli_query($conn, "select * from nailer where nailer_id='" . $nailer_id . "'");
                $row1 = mysqli_fetch_array($profilenailer1);
                ?>
                <div class="container-fluid" id="edit-nailer-data">
                    <form enctype="multipart/form-data" action="../conn/conn_nailer_edit_nl.php?nailer_id=<?php echo $row1["nailer_id"] ?>" method="POST">
                        <img src="<?php echo $row1['nailer_picture']; ?>" class="card-img-top rounded-circle" style="display:inline" id="showpdimg" width="50px" class="imglogin">

                        <input type="file" name="nailer_picture">
                        <div class="row">
                            <div class="col-4"><label style="float:right">ชื่อช่างทำเล็บ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row1['nailer_name']; ?>" name="nailer_name" maxlength='30' required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label style="float:right">ชื่อ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row1['fname']; ?>" name="fname" maxlength='30' required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4"><label style="float:right">นามสกุล : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row1['lname']; ?>" name="lname" maxlength='30' required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4"><label style="float:right">โทรศัพท์ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row1['nailer_tel'] ?>" name="nailer_tel" maxlength='10' required></div>
                        </div><br>


                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                                <button type="submit" class="btn btn-success float-right" style="margin-right:10px">บันทึกข้อมูล</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>