<?php
	include('conn.php');

	$nailer_id=$_GET['nailer_id'];
	$nailer_name=$_POST['nailer_name'];
	$nailer_tel=$_POST['nailer_tel'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];


	$nailer_picture = pathinfo(basename($_FILES['nailer_picture']['name']), PATHINFO_EXTENSION);
	if ($nailer_picture != "") {
		$new_image_name = 'img' .uniqid() . "." . $nailer_picture;
		 //echo $new_image_name;
		$image_path = "img";
		$upload_path = $image_path . "/" . $new_image_name;
		 //echo $upload_path;
	 
		 //uploading
		$upload = move_uploaded_file($_FILES['nailer_picture']['tmp_name'], $upload_path);
		if ($upload == FALSE) {
			 echo "ไม่สามารถ UPLOAD รูปภาพได้";
			 exit();
		}
		$pro_image = "/img/nailer/".$new_image_name;
		$pic = $pro_image;
		mysqli_query($conn, "UPDATE nailer set nailer_name='$nailer_name', nailer_tel='$nailer_tel', fname='$fname', lname='$lname', nailer_picture ='$pic' where nailer_id='$nailer_id'");	
    } else {
        mysqli_query($conn, "UPDATE nailer set nailer_name='$nailer_name', nailer_tel='$nailer_tel', fname='$fname', lname='$lname'  where nailer_id='$nailer_id'");	
    }

    header('location:../nailer/nailer_edit.php');
?>