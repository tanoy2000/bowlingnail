<?php
	include('conn.php');
    $port_id = $_GET['port_id'];
    $nailer_id = $_GET['nailer_id'];
    $port_file = $_POST['port_file'];

    $port_file = pathinfo(basename($_FILES['pic_index']['name']), PATHINFO_EXTENSION);
	if ($port_file != "") {
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
		$pro_image = "/img/review/profile/".$new_image_name;
		$pic = $pro_image;

    mysqli_query($conn, "insert into portfolio_nailer (port_id, nailer_id) 
    values ('$port_id', '$nailer_id', '$pic')");
    header('location:../index_profile_nailer.php');
    }
?>
