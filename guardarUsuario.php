<?php 
	include('db/DB.php');
	if (isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['password'])) {
		try {
			$email = $_POST['email'];
			$nombre = $_POST['nombre'];

			//Nunca almacenar las contraseñas en texto plano. No utilizar MD5 ni SHA1
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

	    	//En caso de que no ocurra un error redirecciona al index y muestra un mensaje de creación exitosa.
	    	header('location:index.php?status=1');
		} catch(PDOException $e) {

			//En caso de error redirecciona de nuevo al formulario de registro y muestra un error
			header('location:crearUsuario.php?error=1');
		}
	}
 ?>