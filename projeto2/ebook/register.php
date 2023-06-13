<!DOCTYPE html>
<html>
	<head>
		<title>Ebook Database</title>
	</head>
	<body>
		<form action="sgebook.php" method="post" enctype="multipart/form-data">
			<label>Ebook name</label>
			<input type="text" name="name" required><br />
			<label>Ebook file</label>
			<input type="file" name="file" required><br />
			<label>Ebook cover</label>
			<input type="file" name="cover" required><br />
			<input type="submit" value="upload">
		</form>
		
		<a href="showebook.php">Show latest entries</a>
	</body>
</html>