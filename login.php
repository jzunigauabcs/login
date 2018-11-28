<?php 
	session_start();
	include('bd/DB.php');

	if (isset($_POST['usuario'])) {
		$user = $_POST['usuario'];
		$password = $_POST['password'];

		//Insecure
		$query = "SELECT email, password FROM usuario where email='$user' and password='$password'";

		//Bind params
		//$query = "SELECT email, password FROM usuario where email=:email";
		$db = new DB();
		$conn = $db->getConnection();
		$stmt = $conn->prepare($query); 
		//Bind params
		//$stmt->bindParam(':email', $user);
    	$stmt->execute();
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);

    	$result = $stmt->fetch();
    	// if($result && password_verify($password, $result['password'])) {
    	// 	$_SESSION['email'] = $result['email'];
    	// 	header('location:home.php');
    	// } else {
    	// 	header('location:index.php?error=1');
    	// }
    	if($result) {
    		$_SESSION['email'] = $result['email'];
    		header('location:home.php');
    	} else {
    		header('location:index.php?error=1');
    	}
    		
	}
 ?>