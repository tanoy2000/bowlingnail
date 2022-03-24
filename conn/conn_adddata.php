<?php
	include('conn.php');

	$cus_id=$_POST['cus_id'];
	$name=$_POST['name'];
	$detail=$_POST['detail'];
	$price=$_POST['price'];
	$file=$_FILES['file'];
	$filename=$_FILES["file"]["name"];
	//tmp_name โฟลเดอร์ไว้พักข้อมูล
	$filTmpename= $_FILES["file"]["tmp_name"];
	$fileExt= explode(".",$filename);
	$fileAcExt= strtolower(end($fileExt));
	$newFilename= time() . "." . $fileAcExt;
	//save file ลง e_img/
	$newe_img = "../img/".$newFilename;
    $upimg = pathinfo($newe_img,PATHINFO_EXTENSION);
    $upload = 1;
        if(file_exists($newe_img)){
            $upload = 0;
        }else{
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$newe_img)){
                basename($_FILES["file"]["name"]);
            }
        }
	
	//up ลง db
	move_uploaded_file($filTmpename,$newe_img);
		
	mysqli_query($conn,"insert into service_item (cus_id,name,detail,price,file) 
		values ('$cus_id','$name','$detail','$price','$newe_img')");
	header('location:../admin/show_edit.php');

?>