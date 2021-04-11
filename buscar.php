<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BUSCAR</title>
<style>
table, th, td {
    border: 1px solid black;
}

.form  {
    border: none;
}
</style>


</head>

<body>
<?php
include ("menu.html");
include ("databaseconnect.php");

?>

<br><br>
<center><h3>Busqueda de Expedientes</h3>
	
<form method="post" name="form1" action="buscar2.php">
<p>&nbsp;</p>
<table width="512" height="50" border="0"align="center" class="form">
<tr>
<th height="50" scope="col" class="form">Codigo de Expediente</th>
<th scope="col" class="form"><input type="text" name="buscar" placeholder= "Número de expediente" /></th>
<th scope="col" class="form"><input type="submit" name="bus" value="Buscar" /></th>
</tr>
</table>
<p>&nbsp;</p>
</form>


</body>
</html>
