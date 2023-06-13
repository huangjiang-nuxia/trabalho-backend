<?php
	include 'funcs.php';
	
	$name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	//$filename = filter_input(INPUT_POST, 'filename', FILTER_SANITIZE_STRING);
	//$coverart = filter_input(INPUT_POST, 'coverart', FILTER_SANITIZE_STRING);
	//$coverart = $_POST['coverart'];
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	
	edit_ebook($name, $id, $conn_man);
	
	$file  = $_FILES['file'];
	$cover = $_FILES['cover'];
	// ---------------------- //
	$tmp_file  = $file['tmp_name'];
	$tmp_cover = $cover['tmp_name'];
	$dir = "files/";
	$localfn = $file['name'];
	$localcn = $cover['name'];
	
	$extpdf      = pathinfo($localfn,PATHINFO_EXTENSION);
	$extcover    = pathinfo($localcn,PATHINFO_EXTENSION);
	$formatfile  = "pdf";
	$formatcover = array("jpg","jpeg","png","gif","jfif","webp");
	
	$newnamefile  = "pdf-".uniqid().".".$extpdf;
	$newnamecover = "img-".uniqid().".".$extcover;
	
	for ($i=0; $i <= 5; $i++) {
		if ($extcover == $formatcover[$i] && $extpdf == $formatfile) {
			move_uploaded_file($tmp_file,$dir.$newnamefile);
			move_uploaded_file($tmp_cover,$dir.$newnamecover);
			edit_files($newnamefile, $newnamecover, $id, $conn_man);
			};
	};
?>