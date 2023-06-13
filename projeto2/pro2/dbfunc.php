<?php
	$servername = "127.0.0.1";
	$dbname	= "pro2";
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
	
	function signup ($namePerson, $photoPerson, $infoPerson, $conn) {
		$suDate = date("Y:m:d");
		
		$sql = "INSERT INTO person (namePerson, photoPerson, infoPerson, suDate)
			VALUES (?, ?, ?, ?)";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$namePerson);
		$lookup->bindValue(2,$photoPerson);
		$lookup->bindValue(3,$infoPerson);
		$lookup->bindValue(4,$suDate);
		
		$lookup->execute();
		$conn = null;
		
	};
	
	function showperson ($conn) {
		$sql = "SELECT * FROM person ORDER BY suDate DESC LIMIT 4";
		$lookup = $conn->prepare($sql);
		$lookup->execute();
		$data = $lookup->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	};
	
	function showintable ($conn) {
		$sql = "SELECT * FROM person ORDER BY suDate DESC";
		$lookup = $conn->prepare($sql);
		$lookup->execute();
		$data = $lookup->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	};
	
	function show_byId($id, $conn) {
		$sql = "SELECT * FROM person WHERE idPerson = ?";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$id);
		$lookup->execute();
		$data = $lookup->fetch(PDO::FETCH_ASSOC);
		$conn = null;
		
		return $data;
	};
	
	function del_user($id, $picture, $conn) {
		$sql = "DELETE FROM person WHERE idPerson = ?";
		$lookup = $conn->prepare($sql);
		$lookup->bindValue(1,$id);
		$res = $lookup->execute();
		$conn = null;
		
		unlink("files/$picture");
		header("location:udatamanager.php");
		return $res;
	};
	
	$conn_man = connect($servername, $dbname, $user, $passworddb);
	
?>