<?php
include "conexion.php";

$id = $_GET["id"];

$sql = "DELETE FROM servicios WHERE ID_servicio=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error al eliminar el servicio: " . $conn->error;
}

$conn->close();
?>
