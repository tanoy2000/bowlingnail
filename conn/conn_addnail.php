<?php
// ไฟล์ที่เชื่อมกับดาต้าเบส
	 include('conn.php');

     $name = $_POST['name'];
     $detail = $_POST['detail'];
     $nt_id = $_POST['nt_id'];
     $ns_id = $_POST['ns_id'];
     $S_ID = $_POST['S_ID'];
     $price = $_POST['price'];
     
     $nail_picture = pathinfo(basename($_FILES['addfile']['name']), PATHINFO_EXTENSION);
	if ($nail_picture != "") {
		$new_image_name = 'img' .uniqid() . "." . $nail_picture;
		 //echo $new_image_name;
		$image_path = "../img/nail";
		$upload_path = $image_path . "/" . $new_image_name;
		 //echo $upload_path;
	 
		 //uploading
		$upload = move_uploaded_file($_FILES['addfile']['tmp_name'], $upload_path);
		if ($upload == FALSE) {
			 echo "ไม่สามารถ UPLOAD รูปภาพได้";
			 exit();
		}
		$pro_image = "../img/nail/".$new_image_name;
		$pic = $pro_image;
    }
    mysqli_query($conn, "insert into service_item (name, detail, nt_id, ns_id, S_ID, price,file ) 
	 values ('$name','$detail', '$nt_id', '$ns_id', '$S_ID', '$price', '$pic')");
     header('location:../admin/editnail_hand_one.php');
?>