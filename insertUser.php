<?php 
session_start();
	include('bd/DB.php');

	if (isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['password'])) {
		try {
			$email = $_POST['email'];
			$nombre = $_POST['nombre'];
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

			$db = new DB();
			$conn = $db->getConnection();
			$query = 'INSERT INTO usuario(nombre, email, password) VALUES(:nombre, :email, :password)';
			$stmt = $conn->prepare($query); 
			//Bind params
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':nombre', $nombre);
			$stmt->bindParam(':password', $password);
	    	$stmt->execute();

	    	header('location:index.php?status=1');
		} catch(PDOException $e) {
			header('location:crearUsuario.php?error=1');
		}
	}
 ?>