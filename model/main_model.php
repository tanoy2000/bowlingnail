<link rel="stylesheet" href="css_modal.css">

<!-- LOGIN -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="col" id="login">
            <form method="POST" action="conn/conn_login.php">
                <img src="img/bowling-logo.svg" alt="logo" class="imglogin">
                <br>
                <h3>เข้าสู่ระบบ</h3>
                <hr>
            <div class="form-group">
                <input class="form-control" placeholder="ชื่อผู้ใช้งานหรืออีเมล" name="username" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="รหัสผ่าน..." name="password" type="password" value="">
            </div>
                <input class="login" type="submit" value="เข้าสู่ระบบ" name="login"><br>
            <div class="register">
                <a class="register-link" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                    href="#register"><span aria-hidden="true">ลงทะเบียน ?</span></a>
                
                <a class="forgot-link" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                    href="#forgot"><span aria-hidden="true">ลืมรหัสผ่าน?</span></a>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- /index/ -->
<div class="modal fade" id="login2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="col" id="login">
            <form method="POST" action="../conn/conn_login.php">
                <img src="../img/bowling-logo.svg" alt="logo" class="imglogin">
                <br>
                <h3>เข้าสู่ระบบ</h3>
                <hr>
            <div class="form-group">
                <input class="form-control" placeholder="ชื่อผู้ใช้งานหรืออีเมล" name="username" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="รหัสผ่าน..." name="password" type="password" value="">
            </div>
                <input class="login" type="submit" value="เข้าสู่ระบบ" name="login"><br>
            <div class="register">
                <a class="register-link" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                    href="#register"><span aria-hidden="true">ลงทะเบียน ?</span></a>
                
                <a class="forgot-link" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                    href="#forgot"><span aria-hidden="true">ลืมรหัสผ่าน?</span></a>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>


<!-- ลงทะเบียน -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col" id="register-data">
                        <form method="POST" action="conn/conn_register.php" method="POST"
                            enctype="multipart/form-data">
                            <img src="img/bowling-logo.svg" alt="logo" class="imglogin"><br>
                            <h3 class="modal-title" id="myModalLabel">ลงทะเบียน</h3>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">ชื่อผู้ใช้งาน :
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="username"
                                        placeholder="กรุณากรอกชื่อผู้ใช้..">
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" name="fname"
                                        type="fname">ชื่อจริง : </label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" placeholder="กรุณากรอกชื่อจริง..." name="fname"
                                        type="fname" value="">
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" name="lname"
                                        type="lname">นามสกุล : </label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" placeholder="กรุณากรอกนามสกุล..." name="lname"
                                        type="lname" value="">
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" name="password"
                                        type="password">รหัสผ่าน : </label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" placeholder="กรุณากรอกรหัสผ่าน..." name="password"
                                        type="password" value="">
                                </div>
                            </div>

                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">อีเมล : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="email" placeholder="กรุณากรอกอีเมล..">
                                </div>
                            </div>

                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">เบอร์โทรศัพท์ :
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="tel"
                                        placeholder="กรุณากรอกเบอร์โทรศัพท์..">
                                </div>
                            </div>

                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">อัปโหลดไฟล์ :
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="file" class="form-control-file" name="file" accept="image/*"
                                        onchange="loadFile1(event)" required>
                                </div>
                            </div><br>

                            <div class="modal-footer">
                                <button class="regis" type="submit" class="btn btn-lg btn-block btn-success">
                                    <span class="glyphicon glyphicon-floppy-disk"></span>ลงทะเบียน</a>
                                    <button class="cencel" type="button" class="btn-lg btn-block btn-danger"
                                        data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                            </div>

                            <div class="userlogin">
                                <p>คุณเป็นสมาชิกอยู่แล้ว ?
                                    <a class="login-link" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                                        href="#login">
                                        <span aria-hidden="true">เข้าสู่ระบบที่นี่</span>
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /index/ -->
<div class="modal fade" id="register2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col" id="register-data">
                        <form method="POST" action="../conn/conn_register.php" method="POST"
                            enctype="multipart/form-data">
                            <img src="../img/bowling-logo.svg" alt="logo" class="imglogin"><br>
                            <h3 class="modal-title" id="myModalLabel">ลงทะเบียน</h3>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">ชื่อผู้ใช้งาน :
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="username"
                                        placeholder="กรุณากรอกชื่อผู้ใช้..">
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" name="fname"
                                        type="fname">ชื่อจริง : </label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" placeholder="กรุณากรอกชื่อจริง..." name="fname"
                                        type="fname" value="">
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" name="lname"
                                        type="lname">นามสกุล : </label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" placeholder="กรุณากรอกนามสกุล..." name="lname"
                                        type="lname" value="">
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" name="password"
                                        type="password">รหัสผ่าน : </label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" placeholder="กรุณากรอกรหัสผ่าน..." name="password"
                                        type="password" value="">
                                </div>
                            </div>

                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">อีเมล : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="email" placeholder="กรุณากรอกอีเมล..">
                                </div>
                            </div>

                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">เบอร์โทรศัพท์ :
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="tel"
                                        placeholder="กรุณากรอกเบอร์โทรศัพท์..">
                                </div>
                            </div>

                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label">อัปโหลดไฟล์ :
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="file" class="form-control-file" name="file" accept="image/*"
                                        onchange="loadFile1(event)" required>
                                </div>
                            </div><br>

                            <div class="modal-footer">
                                <button class="regis" type="submit" class="btn btn-lg btn-block btn-success">
                                    <span class="glyphicon glyphicon-floppy-disk"></span>ลงทะเบียน</a>
                                    <button class="cencel" type="button" class="btn-lg btn-block btn-danger"
                                        data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                            </div>

                            <div class="userlogin">
                                <p>คุณเป็นสมาชิกอยู่แล้ว ?
                                    <a class="login-link" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                                        href="#login2">
                                        <span aria-hidden="true">เข้าสู่ระบบที่นี่</span>
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ลืมรหัสผ่าน -->
<!-- <div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class=''>
            <form method="POST" action="../conn/conn_forgot.php">
               <center>
                    <img src="../img/bowling-logo.svg" alt="logo" width="50%" class="imglogin"><br><br>
                    <h3 style="color: black">ลืมรหัสผ่าน</h3>
                </center><br>
            <div class="form-group">
                <input class="form-control" placeholder="ชื่อผู้ใช้งานหรืออีเมล" name="username" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="รหัสผ่านใหม่.." name="password" type="password" value="">
            </div>
                <input class="login" type="submit" value="เข้าสู่ระบบ" name="login"><br>
            <div class="register">
                <a class="register-link" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                    href="#register"><span aria-hidden="true">ลงทะเบียน ?</span></a>
                
                <a class="forgot-link" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                    href="#forgot"><span aria-hidden="true">ลืมรหัสผ่าน?</span></a>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div> -->
<!-- ลืมรหัสผ่าน -->

<!-- Add Data -->
<div class="modal fade" id="add_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header" id="add-header">
                    <h4 class="modal-title" id="myModalLabel"><i class="bi bi-folder-plus"></i> &nbsp;เพิ่มข้อมูลลายเล็บ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="col" id="add-data-nail">
                    <form action="../conn/conn_addnail.php" method="POST" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <div class="col-4">
                                <label>ชื่อลายเล็บ : </label>
                            </div>
                            <div class="col-8">
                                <input class="form-control" type="text" placeholder="ชื่อลายเล็บ" name="name" maxlength='100' required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-4">
                                <label>เพิ่มรูป : </label>
                            </div>
                            <div class="col-8" id="add-file">
                                <input type="file" class="form-control-file" placeholder="อัปโหลดไฟล์ลายเล็บ" name="addfile" accept="image/*" onchange="loadFile1(event)" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-4">
                                <label>เพิ่มรายละเอียด : </label>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control" name="detail" rows="7" placeholder="รายละเอียด"></textarea>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-4">
                                <label>ประเภท : </label>
                            </div>
                            <div class="col-8">
                                    <select name="nt_id" id="nail_type1" required>
                                        <option value="">กรุณาเลือก..</option>
                                        <option value="1">เล็บมือ</option>
                                        <option value="2">เล็บเท้า</option>
                                    </select>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-4">
                                <label>ต่อเล็บ / เซ็ท : </label>
                            </div>
                            <div class="col-8">
                                    <select name="ns_id" id="nail_set" required>
                                   
                                        <option value="">กรุณาเลือก..</option>
                                        <option value="1">ลายเล็บแบบต่อเล็บ</option>
                                        <option value="2">ลายเล็บแบบเซต</option>
                                        <option value="3">สปา</option>
                                    </select>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-4">
                                <label>รูปแบบลายเล็บ : </label>
                            </div>
                            <div class="col-8">
                                
                                    <select name="S_ID" id="nail_type2" required>
                                        <option value="">กรุณาเลือก..</option>
                                        <option value="1">เล็บสีพื้น</option>
                                        <option value="2">เล็บเพ้นส์</option>
                                        <option value="3">เล็บกลิตเตอร์</option>
                                        <option value="4">เล็บสติ๊กเกอร์</option>
                                        <option value="5">เล็บลูกแก้ว</option>
                                    </select>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-4">
                                <label>ราคา : </label>
                            </div>
                            <div class="col-8">
                                <input class="form-control" type="int" placeholder="ราคา" name="price" maxlength='11' required>
                            </div>
                        </div>

                        <hr>
                        <div class="row mt-1">
                            <div class="col">
                                <button type="reset" class="btn btn-light float-left" style="color:black">รีเซ็ต</button>
                                <button type="submit" class="btn btn-primary float-right">บันทึก</button>
                            </div>
                        </div><br>
                    </form>
                </div>
        </div>
    </div>
</div>

<!--Edit profile -->
<div class="modal fade" id="editprofile<?php echo $cus_id ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">     
            <div class="modal-header" id="user-edit-profile">
                <h4 class="modal-title" id="myModalLabel"><i class="bi bi-person-rolodex"></i> &nbsp;แก้ไขข้อมูลส่วนตัว</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <?php
					$editprofile=mysqli_query($conn,"select * from customer where cus_id='$cus_id'");
					$row=mysqli_fetch_array($editprofile);
				?>
                <div class="container-fluid" id="user-data-profile">
                    <form action="../conn/conn_edit_profile.php?cus_id=<?php echo $cus_id ?>" enctype="multipart/form-data" method="POST">
                        <img src="<?php echo $row['file']; ?>" class="card-img-top rounded-circle" id="showpdimg" class="imglogin">
                            <input type="file" id="file" name="file">

                        <hr>
                        <div class="row">
                            <div class="col-4"><label>รหัสสมาชิก : </label><br></div>
                            <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['cus_id']; ?>" name="cusi_d" disabled></div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label>ชื่อผู้ใช้งาน : </label><br></div>
                            <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['username']; ?>" name="username" maxlength='30' disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label>ชื่อ : </label><br></div>
                            <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['fname']; ?>" name="fname" maxlength='50' require></div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label>นามสกุล : </label><br></div>
                            <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['lname']; ?>" name="lname" maxlength='50' require></div>
                        </div>
                 
                        <div class="row">
                            <div class="col-4"><label>อีเมล : </label><br></div>
                            <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['email']; ?>" name="email" maxlength='100' require></div>
                        </div>

                        <div class="row">
                            <div class="col-4"><label>โทรศัพท์ : </label><br></div>
                            <div class="col-8"><input type="text" value="&nbsp;<?php echo $row['tel'] ?>" name="tel" maxlength='10' require></div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                                <button type="submit" class="btn btn-success float-right">บันทึกข้อมูล</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


