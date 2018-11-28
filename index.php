<?php 
include_once('template/header.php'); 
?>
			<?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error</strong> Usuario y contraseña incorrectos.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<?php if (isset($_GET['status']) && $_GET['status'] == 1): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					 Datos almacenados correctamente.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<div class="row align-items-center justify-content-center login">
				<div class="jumbotron col-6">
					<form action="login.php" method="POST">
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" name="email">	
						</div>
						<div class="form-group">
							<label for="">Contraseña</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="text-right pt-2 pb-1">
							<a href="crearUsuario.php">Crear cuenta</a>
						</div>
						<button class="btn btn-success">Iniciar sesión</button>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>