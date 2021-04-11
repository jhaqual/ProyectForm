<?php 
include "databaseconnect.php";

$register="INSERT INTO mascotas (nombre, fecha_nacimiento, tipo, raza, sexo, nombre_propietario) VALUES ('$_POST[nombre]','$_POST[nacimiento]', '$_POST[sexo]','$_POST[raza]','$_POST[tipo]','$_POST[propietario]')";


if(mysqli_query($conn, $register)) {
    echo "Registro de datos satisfactorio";
}else{
    echo "Error al registrar: " . $register . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<meta http-equiv="Refresh" content="1;url=index.php">


