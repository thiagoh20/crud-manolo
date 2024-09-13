<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Préstamo</title>
</head>
<body>
    <h2>Préstamo Exitoso</h2>
    <?php if (isset($_GET['exito']) && $_GET['exito'] == 1): ?>
        <p>¡El préstamo del libro ha sido registrado con éxito!</p>
        <form action="guardar_datos_usuario.php" method="POST">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" required>
            <br>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" required>
            <br>
            <input type="submit" value="Guardar Datos">
        </form>
    <?php else: ?>
        <p>Hubo un error al procesar el préstamo.</p>
    <?php endif; ?>
</body>
</html>
