<html>
	<head>
		<title>Formulario</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
				<div class="alert alert-danger" role="alert">
				  Usuario y contraseña incorrectos
				</div>
			<?php endif; ?>
			<form action="login.php" method="POST">
				<div class="form-group">
					<label for="">Usuario</label>
					<input type="text" class="form-control" name="usuario">	
				</div>
				<div class="form-group">
					<label for="">Contraseña</label>
					<input type="password" class="form-control" name="password">
				</div>
				<button class="btn btn-success">Iniciar sesión</button>
			</form>
		</div>
		
	</body>
</html>