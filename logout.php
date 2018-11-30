<?php 
	session_start();
	
	//La función session_destroy destruye la información registrada de una sesión
	session_destroy();
	header('location:index.php');
 ?>