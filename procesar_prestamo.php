<?php
// Conexión a la base de datos (ajusta los parámetros según tu configuración)
$conexion = new mysqli("localhost", "root", "", "biblioteca2");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener el ID del libro seleccionado
$libro_id = $_POST['id_libro'];

// Registrar el préstamo en la tabla "prestamo"
$sql = "INSERT INTO prestamo (id_libro, fecha_prestamo) VALUES (?, NOW())";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $libro_id);

if ($stmt->execute()) {
    // Redirigir a la página de confirmación con un mensaje de éxito
    header("Location: confirmacion_prestamo.php?exito=1");
    exit();
} else {
    echo "Error al procesar el préstamo: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>

