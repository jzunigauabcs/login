<?php 
session_start();
	if(!isset($_SESSION['user'])) {
		header('location: index.php');
	}
	include('template/header.php'); ?>
			<div class="text-right"><a href="logout.php">Cerrar sesión</a></div>
				<?php if(isset($_GET['status'])): 
					if($_GET['status'] == 0): ?>
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					  Imagen guardada correctamente
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<?php else: ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						   <strong>Error</strong>
						   <?php if(isset($_SESSION['error'])): 
						   			echo $_SESSION['error']; 
						   		else:
						   			echo "Ocurrió un error al intentar almacenar la imagen"; 
						   		endif;?>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<div class="row align-items-center justify-content-center">
				<div class="jumbotron col-8">
					<h1 class="text-center">Bienvenido <?php echo $_SESSION['user']; ?></h1>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-8">
					<div class="custom-file">
						<form action="uploadPicture.php"  method="POST" enctype="multipart/form-data">
						    <input type="file" class="custom-file-input" id="uploadPicture" name="uploadPicture" required>
						    <label class="custom-file-label" for="uploadPicture">Seleccione una imagen...</label>
						    <div class="text-right mt-2">
						    	<button class="btn btn-success">Subir imagen</button>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>