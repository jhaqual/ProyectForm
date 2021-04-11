<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BUSCAR</title>
<style>
table, th, td {
    border: 1px solid black;
}

.div {
    position: absolute;
}
</style>


</head>

<body>
<div width="512" height="50" border="0"align="center">

<?php
include ("menu.html");
include ("databaseconnect.php");
$finder = $_REQUEST['buscar'];
?>
<br><br>
<center><h3>Busqueda de Expedientes</h3>
<?php
$browser= "SELECT * FROM mascotas WHERE id_mascota = '$finder'";
$result = mysqli_query($conn, $browser);
if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th>Codigo de Expediente</th>
                <th>Nombre de la Mascota</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo de la Mascota</th>
                <th>Raza</th>
                <th>Tipo de Mascota</th>
                <th>Propietario de la Mascota</th>
            </tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><th>".$row["id_mascota"].
             "</th><th>".$row["nombre"].
             "</th><th>".$row["fecha_nacimiento"].
             "</th><th>".$row["tipo"].
             "</th><th>".$row["raza"].
             "</th><th>".$row["sexo"].
             "</th><th>".$row["nombre_propietario"]."</th></tr>";
    }
    echo "</table>";
    } else {
    echo " No hay resultados ";
}

?>
</div>
</body>
</html>