<?php 
	$title = $_POST['title'];
	$ebook = $_FILES['file2'];
	$tmp = $ebook['tmp_name'];
	$dir = "files/";
	$localfn = $ebook['name'];
	
	//echo $title." - ".$ebook['tmp_name'];
	$ext = pathinfo($localfn,PATHINFO_EXTENSION);
	
	if ($ext=="pdf" || $ext=="docx") {
		echo "upload concluded.";
		move_uploaded_file($tmp, $dir.$localfn);
	} else {
		echo "unsupported format!";
	};
?>