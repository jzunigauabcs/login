<?php 
	session_start();
	/*
	 * Script que permite subir una imagen en el servidor. La imagen se subirá a una carpeta llamada upload, la cual se encuentra en la raíz de nuestra carpeta de proyecto.
	 */
	if(!isset($_SESSION['user'])) {
		header('location: index.php');
	}

	if(!isset($_FILES['uploadPicture'])) {
		header('location: home.php?status=-1');
	} else {
		$targetDir = 'uploads/';
		unset($_SESSION['error']);
		//Regresa el nombre del archivo
		$fileName = $_FILES['uploadPicture']['name'];
		//Regresa el tamaño del archivo
		$fileSize = $_FILES['uploadPicture']['size'];
		//tipo de archivo
		$fileType = $_FILES['uploadPicture']['type'];
		//Al enviarse la imagen al servidor se almacena temporalmente en memoria con un nombre temporal
		$fileTmp =$_FILES['uploadPicture']['tmp_name'];
		//extensión del archivo 
		$fileExt = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));		

		if(!isImage($fileExt)) {
			$_SESSION['error'] = 'Formato incorrecto de archivo';
		} else if(!validSize($fileSize)){
			$_SESSION['error'] = 'El tamaño de la imagen no puede ser mayor a 5 MB';
		} 

		if(!isset($_SESSION['error'])) {
			move_uploaded_file($fileTmp,"$targetDir/$fileName");
			$status = 0;
		} else {
			$status = -1;
		}
		header("location:home.php?status=$status");

	}

	//Valida si el archivo es una imagen válida
	function isImage($fileExt) {
		$expensions= array("jpeg","jpg","png");
		return in_array($fileExt, $expensions);
	}

	//Se establace un tamaño máximo para las imágenes. En este ejemplo se optó por 5 MB
	function validSize($sizeImage) {
		$validSize = 5242880;
		return $sizeImage <= $validSize;
	}