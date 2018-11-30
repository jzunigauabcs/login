<?php 
	session_start();
	include_once('db/DB.php');

	if(isset($_POST['email'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Se compara solo el correo electrónico
		$query = "SELECT email, password FROM usuario WHERE email=:email";

		$db = new DB();
		$conn = $db->getConnection();
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		/*
			Se valida que la ejecución del query regrese información y se compara la contraseña ingresada por el usuario con la recuperada en la bd. Esto se hace debido a que la contraseña se encuentra almacenada como una cadena hash. 
		*/
		$result	= $stmt->fetch();
		if($result && password_verify($password, $result['password'])) {
			$_SESSION['user'] = $result['email'];
			header('location:home.php');
		} else {
			header('location:index.php?error=1');
		}
	}
 ?>