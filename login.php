<?php 
	session_start();
	include_once('db/DB.php');

	if(isset($_POST['email'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT email, password FROM usuario WHERE email=:email AND password=:password";

		$db = new DB();
		$conn = $db->getConnection();
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		if($result = $stmt->fetch()) {
			$_SESSION['user'] = $result['email'];
			header('location:home.php');
		} else {
			header('location:index.php?error=1');
		}
	}
 ?>