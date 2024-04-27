<?php
include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["Nombre"];
$descripcion = $_POST["Descripcion"];
$precio = $_POST["Precio"];

$sql = "UPDATE Servicios SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE ID_Servicio=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error al actualizar el Servicios: " . $conn->error;
}

$conn->close();
?>
