<?php include('template/header.php');  ?>
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
					<form action="guardarUsuario.php" method="POST">
						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" class="form-control" name="nombre">	
						</div>
						<div class="form-group">
							<label for="">Correo electrónico</label>
							<input type="text" class="form-control" name="email">	
						</div>
						<div class="form-group">
							<label for="">Contraseña</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
							<label for="">Repetir Contraseña</label>
							<input type="password" class="form-control" name="repeatpassword">
						</div>
						<button class="btn btn-success">Guardar</button>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>