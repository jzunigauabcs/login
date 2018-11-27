<?php 
	$datos = array(
		array('usuario' => 'admin', 'password' => '123'),
		array('usuario' => 'ana', 'password' => '321'),
		array('usuario' => 'jose', 'password' => '987'),
	);
	
	if(isset($_POST['usuario'])) {
		$found = false;
		foreach($datos as $usuario) {
			if($_POST['usuario'] == $usuario['usuario'] && $_POST['password'] == $usuario['password']) {
				$found = true;
				break;
			}
		}
		
		if($found)
			echo '<h3>Bienvenido usuario</h3>';
		else
			header('Location: index.php?error=1');
	}
 ?>