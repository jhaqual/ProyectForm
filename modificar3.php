<?php
include ("databaseconnect.php");

$modificar_3="UPDATE mascotas SET id_mascota='$_POST[id_mascota]',nombre='$_POST[nombre]', nacimiento='$_POST[nacimiento]', sexo='$_POST[sexo]',raza='$_POST[raza]',tipo='$_POST[tipo]','$_POST[propietario] ";
$result = mysqli_query($conn, $modificar_3);

if (mysqli_query($conn, $modificar_3)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
mysqli_close($conn)
?>


<!-- Nota referencial
    <meta http-equiv="refresh" content="0;URL=modificar.php">
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);



UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value 