<?php
	$servername = "127.0.0.1";
	$dbname		= "pro2";
	$user		= "root";
	$passworddb = "";
	
	function connect($servername, $dbname, $user, $passworddb) {
		try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $passworddb);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
		} catch (PDOException $e) {
			echo "<h1>Connetion failed: </h1>".$e;
			return null;
		};
	};
	
	function signup ($nameEbook, $nameFile, $coverEbook, $conn) {
		$rgDate = date("Y:m:d");
		
		$sql = "INSERT INTO ebook (nameEbook, nameFile, coverEbook, rgDate)
			VALUES (?, ?, ?, ?)";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$nameEbook);
		$lookup->bindValue(2,$nameFile);
		$lookup->bindValue(3,$coverEbook);
		$lookup->bindValue(4,$rgDate);
		
		$lookup->execute();
		$conn = null;
		header("location:showebook.php");
		
	};
	
	function showsome($conn) {
		$sql = "SELECT * FROM ebook ORDER BY rgDate DESC LIMIT 5";
		
		$lookup = $conn->prepare($sql);
		$lookup->execute();
		$data = $lookup->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	};
	
	function showall($conn) {
		$sql = "SELECT * FROM ebook ORDER BY rgDate DESC";
		
		$lookup = $conn->prepare($sql);
		$lookup->execute();
		$data = $lookup->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	};
	
	function edit_ebook ($nameEbook, $idEbook, $conn) {
		$sql = "UPDATE ebook SET nameEbook = ? WHERE idEbook = ?";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$nameEbook);
		$lookup->bindValue(2,$idEbook);
		$res = $lookup->execute();
		
		$conn = null;
		
		//header("location:../views/usertable.php");
		return $res;
	};
	
	function edit_files ($nameFile, $coverEbook, $idEbook, $conn) {
		$sql = "UPDATE ebook SET nameFile = ?, coverEbook = ? WHERE idEbook = ?";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$nameFile);
		$lookup->bindValue(2,$coverEbook);
		$lookup->bindValue(3,$idEbook);
		$res = $lookup->execute();
		
		$conn = null;
		
		header("location:showebook.php");
		return $res;
	};
	
	function del_ebook($id, $picture, $file, $conn) {
		$sql = "DELETE FROM ebook WHERE idEbook = ?";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$id);
		$res = $lookup->execute();
		$conn = null;
		
		unlink("files/$picture");
		unlink("files/$file");
		return $res;
	};
	
	function show_byId($id, $conn) {
		$sql = "SELECT * FROM ebook WHERE idEbook = ?";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$id);
		$lookup->execute();
		$data = $lookup->fetch(PDO::FETCH_ASSOC);
		$conn = null;
		
		return $data;
	};
	
	$conn_man = connect($servername, $dbname, $user, $passworddb);
?>