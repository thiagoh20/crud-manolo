<?php
// Incluir el archivo de conexión
include 'modelo/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $contrasena = $_POST['contrasena'];
    $numero_asistente = $_POST['numero_asistente'];

    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO registro_login (nombre, apellido, documento, contrasena, numero_asistente) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $usuario, $apellido, $documento, password_hash($contrasena, PASSWORD_DEFAULT), $numero_asistente);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>

<body>
<div class="registro_container">
    <h1>Registrate</h1>

    <form action="register.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="documento">Documento:</label>
        <input type="number" id="documento" name="documento" required><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <label for="numero_asistente">Número de Asistente:</label>
        <input type="text" id="numero_asistente" name="numero_asistente" required><br><br>

        <button type="submit" class="btn btn-primary" name="btnregistrarlogin" value="ok">Registrar</button><br>
        <br>
        <a href="login.php" class="cancelar">Cancelar</i></a>
    </form>
</div>
</body>
</html>
