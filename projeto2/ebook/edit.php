<?php
	include 'funcs.php';

	$id = $_GET['id'];
	$data = show_byId($id, $conn_man);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>EDIT EBOOK</title>
	</head>
	<body>
		<form action="scriptebook.php" method="post" enctype="multipart/form-data">
			<label for="">ID:</label>
			<input type="text" name="id" value="<?=$id;?>" readonly><br />
			<label for="">Name</label>
			<input type="text" name="name" value="<?=$data['nameEbook']?>"><br />
			<label for="">File</label>
			<input type="file" name="file" value="<?=$data['nameFile'];?>"><br />
			<label for="">Cover art</label>
			<input type="file" name="cover" value="<?=$data['coverEbook']?>"><br />
			<input type="submit" value="Edit">
		</form>
	</body>
</html>