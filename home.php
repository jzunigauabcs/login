<?php 
	session_start();
	if(!isset($_SESSION['email'])) {
		header('location: index.php');
	}
	include('template/header.php'); ?>
			<div class="text-right"><a href="logout.php">Cerrar sesión</a></div>
			<div class="row align-items-center justify-content-center">
				<div class="jumbotron col-8">
					<h1 class="text-center">Bienvenido <?php echo $_SESSION['email']; ?></h1>
				</div>
			</div>
		</div>
		
	</body>
</html>