<?php
// ไฟล์ที่เชื่อมกับดาต้าเบส
	include('conn.php');

     $username = $_POST['username'];
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $password = $_POST['password'];
     $email = $_POST['email'];
     $tel = $_POST['tel'];
     $typeuser_id =2;
     $file = $_FILES['file'];

     $file = pathinfo(basename($_FILES['file']['name']), PATHINFO_EXTENSION);
     if ($file != "") {
        $new_image_name = 'img' .uniqid() . "." . $file;
         //echo $new_image_name;
        $image_path = "../img/user";
        $upload_path = $image_path . "/" . $new_image_name;
         //echo $upload_path;
     
         //uploading
        $upload = move_uploaded_file($_FILES['file']['tmp_name'], $upload_path);
        if ($upload == FALSE) {
             echo "ไม่สามารถ UPLOAD รูปภาพได้";
             exit();
        }
        $pro_image = "../img/user/".$new_image_name;
        $pic = $pro_image;

     mysqli_query($conn, "insert into customer (username, fname, lname, password, email, tel, file, typeuser_id) 
          values ('$username', '$fname', '$lname', '$password', '$email', '$tel', '$pic', '$typeuser_id')");
     }
     header('location:../index.php');
?>