<?php
	include('conn.php');
    $bd_id = $_GET['bd_id'];
	$cus_id = $_GET['cus_id'];
	$username = $_GET['username'];
    $date__review = $_POST['date__review'];
    $comment = $_POST['comment'];
    $star_level = $_POST['star_level'];
    $review_picture = $_POST['review_picture'];

    $review_picture = pathinfo(basename($_FILES['pic_index']['name']), PATHINFO_EXTENSION);
	if ($review_picture != "") {
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
		$pro_image = "/img/review/".$new_image_name;
		$pic = $pro_image;

    mysqli_query($conn, "insert into book_nail_detail (bd_id, cus_id, username, date__review, comment, star_level) 
    values ('$bd_id','$cus_id','$username','$date__review', '$comment', '$star_level', '$pic')");
    header('location:../header/header_nailer.php');
    }
?>
