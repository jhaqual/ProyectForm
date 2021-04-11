<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro-Home</title>
</head>

<body>
	<?php
	include("menu.html");
	?>
	
<br><br>
<center><h3>Registro de Mascotas</h3>
	
<form id="forma1" name="forma1" method="post" action="registro1.php">

	
<table border="1" style="margin: 0 auto;">

<th colspan="2">Ingreso de Mascotas</th>
<tr>
	<td>Codigo de Expediente</td>
	<td>
		<input type="text" name="id_mascota" id="id_mascota"/> <br>
	</td>
</tr>
<tr>
	<td>Nombre de la Mascota</td>
	<td>
		<input type="text" name="nombre" id="nombre"/> <br>
	</td>
</tr>
<tr>
	<td>Fecha de Nacimiento</td>
	<td>
		<input type="text" name="nacimiento" id="nacimiento"/> <br>
	</td>
</tr>
<tr>
	<td>Sexo de la Mascota</td>
	<td>
		<input type="radio" name="sexo" value="macho">Macho<br>
		<input type="radio" name="sexo" value="hembra">Hembra <br>
	</td>
</tr>
<tr>
	<td>Raza</td>
	<td>
		<input type="text" name="raza" id="raza"/> <br>
	</td>
</tr>
<tr>
	<td>Tipo de Mascota</td>
	<td>
		<select name="tipo">
			<option value="perro">Perro</option>
			<option value="gato">Gato</option>
			<option value="ave">Ave</option>
			<option value="pez">Pez</option>
		</select> <br>
	</td>
</tr>

<tr>
	<td>Propietario de la Mascota</td>
	<td>
		<input type="text" name="propietario" id="propietario"/><br>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="reset" value="Limpiar" id="limpiar"/>
	<input type="submit" value="Registrar" id="registrar"/></td>
</tr>


</table>

</form>

</body>
</html>