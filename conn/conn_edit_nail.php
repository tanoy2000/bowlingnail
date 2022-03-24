<?php
// ไฟล์ที่เชื่อมกับดาต้าเบส
	 include('conn.php');
     $ST_ID = $_GET['ST_ID'];
     $name = $_POST['name'];
     $file = $_POST['file'];
     $detail = $_POST['detail'];
     $price = $_POST['price'];

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
        $pro_image = "img/".$new_image_name;
        $pic = $pro_image;
        mysqli_query($conn, "update service_item set name='$name', file ='$pic', detail ='$detail', price ='$price' where ST_ID='$ST_ID'");	
    } else {
        mysqli_query($conn, "update service_item set name='$name', detail ='$detail', price ='$price' where ST_ID='$ST_ID'");	
    }
    
    header('location:../admin/editnail_hand_one.php');

?>

