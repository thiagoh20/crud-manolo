<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $conexion->prepare("DELETE FROM prestamos WHERE id = ?");

    if ($stmt === false) {
        echo '<div class="alert alert-danger">Error en la preparación de la consulta: ' . $conexion->error . '</div>';
    } else {
        // Vincular el parámetro
        $stmt->bind_param("i", $id);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo '<div class="alert alert-success">¡Libro eliminado correctamente!</div>';
            header("location:prestamos.php");
        } else {
            echo '<div class="alert alert-danger">Error al eliminar el libro: ' . $stmt->error . '</div>';
        }

        // Cerrar la declaración
        $stmt->close();
    }
}