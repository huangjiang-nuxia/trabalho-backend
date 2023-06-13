<?php
	include '../pro2/dbfunc.php';
	$id = $_GET['id'];
	$f = $_GET['f'];
	del_user($id, $f, $conn_man);
?>