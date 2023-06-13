<?php
	include '../pro2/dbfunc.php';

	$name = $_POST['name'];
	$pic = $_FILES['file3'];
	$info = $_POST['info'];
	// ----------------------- //
	$tmp = $pic['tmp_name'];
	$dir = "files/";
	$localfn = $pic['name'];
	
	//echo $name." - ".$info." - ".$pic['name']."<br>";
	//var_dump($pic)
	
	$ext = pathinfo($localfn,PATHINFO_EXTENSION);
	$format = array("jpg","jpeg","png","gif","jfif","webp");
	
	$newname = "img-".uniqid().".".$ext;
	
	//echo in_array($ext,$format);
	
	for ($i=0; $i <= 5; $i++) {
		if ($ext == $format[$i]) {
			move_uploaded_file($tmp,$dir.$newname);
			signup($name, $newname, $info, $conn_man);
			header("location:insertindb.php");
			};
	};
	
	//if (in_array($ext,$format)) {
	//	echo "HA!";
	//} else {
	//	echo "NAY!";
	//};
?>