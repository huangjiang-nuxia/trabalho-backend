<?php
	include 'funcs.php';
	$data = showall($conn_man);
	//var_dump($data);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>All entries</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<h1 class="d-flex mx-2 justify-content-center">Registered data</h1>
		<section class="d-flex mx-2 justify-content-center">
			<?php
				foreach($data as $i) {
			?>	
			<div class="card mx-4" style="width: 18rem;">
				<img class="card-img-top" src="files/<?= $i['coverEbook']; ?>" alt="Card image cap" width="320" height="250">
				<div class="card-body">
					<h5 class="card-title"><?= $i['nameEbook']; ?></h5>
					<small><?= date("d/m/Y", strtotime($i['rgDate']));?></small>
					<p class="card-text"><?= $i['nameFile']; ?></p>
					<a href="edit.php?id=<?=$i['idEbook'];?>" class="btn btn-primary">Edit</a>
					<a href="del.php?id=<?=$i['idEbook'];?>&f=<?=$i['coverEbook'];?>&p=<?=$i['nameFile'];?>" class="btn btn-primary">Delete</a>
				</div>
			</div>
			<?php }; ?>
		</section>
		
		<a href="showebook.php">Show less entries</a>
		<a href="register.php">Upload more books</a>
	</body>
</html>