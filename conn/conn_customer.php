<?php
// ไฟล์ที่เชื่อมกับดาต้าเบส
	include('conn.php');

    $cus_id = $_POST['cus_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $file = $_POST['file'];

    $file = pathinfo(basename($_FILES['pic_index']['name']), PATHINFO_EXTENSION);
     if ($file != "") {
          $new_image_name = 'img' .uniqid() . "." . $file;
          //echo $new_image_name;
          $image_path = "img";
          $upload_path = $image_path . "/" . $new_image_name;
          //echo $upload_path;
     
          //uploading
          $upload = move_uploaded_file($_FILES['pic_index']['tmp_name'], $upload_path);
     if ($upload == FALSE) {
          echo "ไม่สามารถ UPLOAD รูปภาพได้";
          exit();
     }
          $pro_image = "/img/user/".$new_image_name;
          $pic = $pro_image;

     mysqli_query($conn, "insert into customer (cus_id, username, email, tel) values ('$cus_id','$username', '$email', '$tel', '$pic')");
     header('location:../index/index_admin.php');
     }
?>