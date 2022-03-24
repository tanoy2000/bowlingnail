<link rel="stylesheet" href="../css_modal.css">

<!-- Delete ลายเล็บ -->
<div class="modal fade" id="del<?php echo $row['ST_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="delete-header">
                <h4 class="modal-title" id="myModalLabel"><i class="bi bi-folder-x"></i>&nbsp;ลบข้อมูลลายเล็บ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <?php
				$del=mysqli_query($conn,"select * from service_item where ST_ID='".$row['ST_ID']."'");
				$row=mysqli_fetch_array($del);
			?>

                <div class="row">
                    <div class="col" id="delete-data-nail">
                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file']; ?>" />
                        <hr>

                        <div class="row">
                            <div class="col-4">
                                <label>รหัสสินค้า : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['ST_ID']; ?>  " name="name" Disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>ชื่อลายเล็บ : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['name']; ?>  " name="name" Disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>รายละเอียด : </label><br>
                            </div>
                            <div class="col-8">
                                <textarea name="detail" rows="3" placeholder="ชื่อรายละเอียด" Disabled><?php echo $row['detail']; ?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label>ราคา : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['price']; ?>  " name="name" Disabled>
                            </div>
                        </div>
                 
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                            <a href="../conn/conn_delete.php?ST_ID=<?php echo $row['ST_ID']; ?>" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> ลบ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Edit ลายเล็บ -->
<div class="modal fade" id="edit<?php echo $row['ST_ID']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">     
            <div class="modal-header" id="edit-header">
                    <h4 class="modal-title" id="myModalLabel"><i class="bi bi-credit-card-2-front"></i> &nbsp; แก้ไขข้อมูลลายเล็บ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
					$edit=mysqli_query($conn,"select * from service_item where ST_ID='".$row['ST_ID']."'");
					$row=mysqli_fetch_array($edit);
				?>
            <form enctype="multipart/form-data" action="../conn/conn_edit.php?ST_ID=<?php echo $row["ST_ID"]?>" method="POST">
                <div class="row">
                    <div class="col" id="edit-data">
                        <img class="img-responsive img-thumbnail" src="<?php echo $row['file']; ?>" id="showpdimg" class="imglogin">
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <label style="float:right">ชื่อลายเล็บ : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['name']; ?>" name="name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label style="float:right">รายละเอียด : </label><br>
                            </div>
                            <div class="col-8">
                                <textarea name="detail" rows="5"
                                    placeholder="ชื่อรายละเอียด"><?php echo $row['detail'];?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label style="float:right">ราคา : </label><br>
                            </div>
                            <div class="col-8">
                                <input type="text" value="<?php echo $row['price']; ?>" name="price" maxlength='30' require>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col" id="btn-edit-nail">
                                <button type="reset" class="btn btn-light">รีเซ็ต</button>
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>


