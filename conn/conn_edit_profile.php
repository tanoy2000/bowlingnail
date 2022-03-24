<?php
// ไฟล์ที่เชื่อมกับดาต้าเบส
	include('conn.php');

    $cus_id = $_GET['cus_id'];
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
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
        mysqli_query($conn, "UPDATE customer set username='$username', fname='$fname', lname='$lname', file ='$pic', email ='$email', tel ='$tel' where cus_id='$cus_id'");	
    } else {
        mysqli_query($conn, "UPDATE customer set username='$username', fname='$fname', lname='$lname', email ='$email', tel ='$tel' where cus_id='$cus_id'");	
    }

    header('location:../user/user_profile.php');

?>
