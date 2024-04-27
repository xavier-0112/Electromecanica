<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Servicios</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #ddd;
        }
        .action-links {
            text-align: center;
        }
        .action-links a {
            margin-right: 10px;
            color: #333;
            text-decoration: none;
        }
        .action-links a:hover {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <h1>CRUD de Servicios</h1>


    <h2>Agregar Servicio</h2>
    <form action="insertar.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br>
        Descripción: <textarea name="descripcion"></textarea><br>
        Precio: <input type="text" name="precio"><br>
        <input type="submit" value="Agregar">
    </form>


    <h2>Servicios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php
        $sql = "SELECT * FROM servicios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["ID_Servicio"]."</td>
                        <td>".$row["Nombre"]."</td>
                        <td>".$row["Descripcion"]."</td>
                        <td>".$row["Precio"]."</td>
                        <td>
                            <a href='editar.php?id=".$row["ID_Servicio"]."'>Editar</a>
                            <a href='eliminar.php?id=".$row["ID_Servicio"]."' onclick=\"return confirm('¿Estás seguro?')\">Eliminar</a>
                        </td>
                    </tr>";
            } 
        } else {
            echo "<tr><td colspan='5'>No hay servicios registrados.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
