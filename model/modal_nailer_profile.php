<div class="modal-dialog modal-xl" id="profilenailer<?php echo $nailer_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูลช่างทำเล็บ</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            <?php
                $profilenailer=mysqli_query($conn,"select * from nailer where nailer_id='".$nailer_id ."'");
                $row=mysqli_fetch_array($profilenailer);
			?>
            <div class="container-fluid">
                <form enctype="multipart/form-data" action="../conn/conn_edit_nailer.php?nailer_id=<?php echo $row["nailer_id"]?>" method="POST">

                        <img src="<?php echo $row['nailer_picture']; ?>" class="card-img-top rounded-circle" 
                        style="display:inline" id="showpdimg" width="50px" class="imglogin">


                        <div class="row">
                            <div class="col-4"><label style="float:right">ชื่อช่างทำเล็บ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row['nailer_name']; ?>" name="nailer_name" maxlength='30' require>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-4"><label style="float:right">โทรศัพท์ : </label><br></div>
                            <div class="col-8"><input type="text" value="<?php echo $row['nailer_tel'] ?>" name="tel" maxlength='10' require></div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                                <button type="submit" class="btn btn-success float-right"
                                    style="margin-right:10px">บันทึกข้อมูล</button>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                    </form>

                </div>
        </div>
    </div>