<?php
	include '../pro2/dbfunc.php';
	$data = showintable($conn_man);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Manage user data</title>
	</head>
	<body>
		
			<h1>Manage user data</h1>
	
		<table style="border: 2px solid;">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Profile picture</th>
				<th colspan="2">Options</th>
			</tr>
			<?php foreach ($data as $i) { ?>
				<tr>
					<td><?=$i['idPerson'];?></td>
					<td style="background-color: #CFFA2E; border: 1px solid"><?=$i['namePerson'];?></td>
					<td><div align="center"><img src="files/<?=$i['photoPerson'];?>" width="35" height="35" /></div></td>
					<td><a href="#">Edit</a></td>
					<td><a href="scriptdel.php?id=<?=$i['idPerson'];?>&f=<?=$i['photoPerson'];?>">Delete</a></td>
				</tr>
			<?php }; ?>
		</table>
	</body>
</html>