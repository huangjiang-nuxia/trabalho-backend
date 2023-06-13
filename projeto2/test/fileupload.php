<?php
	$name = $_POST['filename'];
	$file = $_FILES['file'];
	$desc = $_POST['filedesc'];
	
	//echo "$name - $desc - $file";
	
	$dir = "files/";
	$tmp = $file['tmp_name'];
	$localfn = $file['name'];
	
	var_dump($file);
	
	echo "<br>";
	echo "<h6>File name: ".$file['name']."</h6>";
	echo "<h6>Temp name: ".$file['tmp_name']."</h6>";
	echo "<h6>File type: ".$file['type']."</h6>";
	
	
	$status = move_uploaded_file($tmp, $dir.$localfn);
	
	if ($status) {
		echo "<h2><i>Your file has been uploaded!</i></h2>";
	} else {
		echo "ERROR: upload terminated";
	};
	
?>