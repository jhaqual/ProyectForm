<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar/Eliminar Registros</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>

</head>

<body>
<?php
include ("menu.html");
include ("databaseconnect.php");?>

<br><br>
<center><h3>Modificación / Eliminación de Registros</h3>


<?php
$modify="SELECT * FROM mascotas";
$result = mysqli_query($conn, $modify);
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
    echo "0 results";
}
?>
<br></br>
<form method="post" name="form1" action="modificar2.php">
<th scope="col" class="form"><input type="submit" name="bus" value="Modificar registro" /></th>
</form>
</body>
</html>
