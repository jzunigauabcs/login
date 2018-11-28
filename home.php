<?php 
session_start();
if(!isset($_SESSION['user']))
	header('location:index.php');

include_once('template/header.php');  ?>
			<div class="row align-items-center justify-content-center">
				<div class="jumbotron col-8">
					<h1 class="text-center">Bienvenido <?php echo $_SESSION['user'] ?></h1>
				</div>
			</div>
		</div>
		
	</body>
</html>