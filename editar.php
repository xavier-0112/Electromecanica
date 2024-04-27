<?php
include "conexion.php";

$id = $_GET["id"];

$sql = "SELECT * FROM servicios WHERE id_servicio=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No se encontró el servicios.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
</head>
<body>
    <h1>Editar servicios</h1>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['ID_Servicio']; ?>">
        Nombre: <input type="text" name="Nombre" value="<?php echo $row['Nombre']; ?>" required><br>
        Descripcion: <input type="text" name="Descripcion" value="<?php echo $row['Descripcion']; ?>" required><br>
        Precio: <input type="text" name="Precio" value="<?php echo $row['Precio']; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
