<?php
include "conexion.php";

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

$sql = "INSERT INTO servicios (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
