<?php
	include 'funcs.php';
	
	$id = $_GET['id'];
	$f = $_GET['f'];
	$p = $_GET['p'];
	$tof = del_ebook($id, $f, $p, $conn_man);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>deletion</title>
	</head>
	<body>
	
		<?php
			if ($tof) {
				echo "<h1>Owner of id number ".$id." was successfully deleted.</h1>";
			} else {
				echo "<h1>Owner of id number ".$id." couldn't be deleted.</h1>";
			};
		?>
		
		<a href="showebook.php">HOME</a>
	</body>
</html>