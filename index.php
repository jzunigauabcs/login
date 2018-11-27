<html>
	<head>
		<title>Formulario</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<style>
			header {
				background-color: #563d7c;
				color: white;
				min-height: .3em;
				padding: 10px;
				text-align: center;
			}
			.login {
				height: 100vh;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Mi Sistema</h1>
		</header>
		<div class="container">
			<?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error</strong> Usuario y contraseña incorrectos.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<div class="row align-items-center justify-content-center login">
				<div class="jumbotron col-6">
					<form action="login.php" method="POST">
						<div class="form-group">
							<label for="">Usuario</label>
							<input type="text" class="form-control" name="usuario">	
						</div>
						<div class="form-group">
							<label for="">Contraseña</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="text-right pt-2 pb-1">
							<a href="#">Crear cuenta</a>
						</div>
						<button class="btn btn-success">Iniciar sesión</button>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>