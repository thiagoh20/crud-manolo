<?php

if (!empty($_POST["btnregistrarprestamo"])) {
    if (!empty($_POST["id_usuario"]) and !empty($_POST["id_libro"]) and !empty($_POST["fecha_prestamo"]) and !empty($_POST["fecha_devolucion"]) and !empty($_POST["estado"])) {
        
        $id_usuario = $_POST["id_usuario"];
        $id_libro = $_POST["id_libro"];
        $fecha_prestamo = $_POST["fecha_prestamo"];
        $fecha_devolucion = $_POST["fecha_devolucion"];
        $estado = $_POST["estado"];
        
        // Preparar la consulta de actualización
        $stmt = $conexion->prepare("UPDATE prestamos SET id_usuario = ?, id_libro = ?, fecha_prestamo = ?, fecha_devolucion = ?, estado = ? WHERE ID = ?");
        if ($stmt === false) {
            echo '<div class="alert alert-danger">Error en la preparación de la consulta: ' . $conexion->error . '</div>';
        } else {
            // Vincular los parámetros. Los tipos de datos son 's' (string) para todos excepto 'i' (integer) para el ID.
            $stmt->bind_param("ssssssi", $id_usuario, $id_libro, $fecha_prestamo, $fecha_devolucion, $estado, $id);
        
            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo '<div class="alert alert-success">¡Registro actualizado correctamente!</div>';
                header("location:prestamos.php");
            } else {
                echo '<div class="alert alert-danger">Error al actualizar el registro: ' . $stmt->error . '</div>';
            }
        
            // Cerrar la declaración
            $stmt->close();
        }


    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio! </div>';
    }
}