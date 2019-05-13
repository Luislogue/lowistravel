<?php
	
	include_once('../php/funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="resStyles.css">
	<title>Resultado</title>
</head>
<body>
	<div class="containerR">
		<form class="formularioR">
			<ul>
				<li>
					<?php
					echo "Nombre:". " " .($_POST['name']);
					?>
				</li>
				<li>
				<?php 
					echo "Numero de personas:". " " .($_POST['num']);
				?>
				</li>
				<li>
				<?php
					echo "Fecha". " " .($_POST['date']);
				?>
				</li>
				<li>
				<?php
					echo "Viaje de". " " .($_POST['days']. " " ."dias");
				?>	
				</li>
				<li>
				<?php
					echo "El presupuesto es de". " " .($_POST['budget']);
				?>	
				</li>
				<li>
				<?php
					echo "Pais:". " " .($_POST['country']);
				?>
				</li>
				<li>
				<?php
					echo "Zona". " " .($_POST['place']);
				?>
				</li>
				<li>
				<?php
					echo "Con una comodidad". " " .($_POST['comodity']);
				?>
				</li>
				<li>
				<?php
					echo "Preferencias del cliente:". " " .($_POST['preferences']);
				?>
				</li>
				<li>
				<?php
					echo "Tipo de viaje:". " " .($_POST['type']);
				?>
				</li>
			</ul>
		</form>
	</div>	
</body>
</html>