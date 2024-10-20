<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "biblioteca2");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

// Guardar los datos en la tabla correspondiente (puede ser "usuario" o como prefieras llamarla)
$sql = "INSERT INTO usuario (nombre, direccion, telefono) VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $nombre, $direccion, $telefono);

if ($stmt->execute()) {
    echo "Datos guardados con éxito.";
} else {
    echo "Error al guardar los datos: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>
