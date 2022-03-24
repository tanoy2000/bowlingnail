<!-- อัปโหลดไฟล์ -->
<?php
    include('conn.php');

	$bd_id=$_POST['bd_id'];
	$cus_file=$_POST['cus_file'];

	$cus_file = pathinfo(basename($_FILES['pic_index']['name']), PATHINFO_EXTENSION);
	if ($cus_file != "") {
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
		$pro_image = "/img/uplode/".$new_image_name;
		$pic = $pro_image;

     mysqli_query($conn, "insert into nailer (bd_id) 
	 values ('$bd_id','$pic')");
     header('location:../header/header_uplode.php');
	}
?>