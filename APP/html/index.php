<?php
	include_once('../php/funciones.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/styles.css">
	<title>LT</title>
</head>
<body>
	<header><h1>LowisTravel</h1></header>
		<form class="formulario" method="POST" action="resultado.php">	
			<div class="container">
				<div class="center-content">
				<label class="nombre">
					Nombre de referencia:<input type="text" name="name">
				</label>
				<label>
					Nº Personas:
					<select class="personas" name="num">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</label>
				<label class="fecha">
					Mes/Año:  <input type="date" name="date">
					NºDías: <select name="days" class="dias">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
					</select>
				</label>
				<label class="presu">
					Presupuesto: <input type="number" name="budget">
				</label>
				<label class="pais">
					País: 
					<select name="country" class="country">
						<!-- Introducir por array php paises -->
						<option value="españa">España</option>
					</select>
				</label>
				<label class="sitio">
					Sitio:
					<select name="place" class="place">
						<!-- Introducir por array php sitios -->
						<option value="barna">Barcelona</option>
					</select>
				</label>
				<label class="comodidad">
					Comodidad:
					<select name="comodity" class="comodity">
						<option value="lowcost">Lowcost</option>
						<option value="midcost">Midcost</option>
						<option value="highcost">Highcost</option>
					</select>
				</label>				
				<label class="visita">
				Tipo de Viaje:
					<select name="type" class="type">
						<option value="Family">Familiar</option>
						<option value="Group">Grupal</option>
						<option value="Work">Trabajo</option>
						<option value="Tour">Turismo</option>
					</select>
				</label>
				<label>
					Gustos: 
					<textarea class="gustos" name="preferences" placeholder="Inserte sus preferencias"></textarea>
				</label>
				<button type="submit" class="boton">Enviar</button>
				</div>
			</div>		
		</form>	
</body>
</html>