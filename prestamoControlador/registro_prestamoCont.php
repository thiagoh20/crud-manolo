<?php
if (!empty($_POST["btnregistrarprestamos"])) {
    if (!empty($_POST["id_usuario"]) && !empty($_POST["id_libro"]) && !empty($_POST["fecha_prestamo"]) && !empty($_POST["fecha_devolucion"]) && !empty($_POST["estado"])) {

        // Capturamos los valores del formulario
        $id_usuario = $_POST["id_usuario"];
        $id_libro = $_POST["id_libro"];
        $fecha_prestamo = $_POST["fecha_prestamo"];
        $fecha_devolucion = $_POST["fecha_devolucion"];
        $estado = $_POST["estado"];

        // Consulta SQL con prepared statements para evitar inyecciones SQL
        $sql = "INSERT INTO prestamos (id_usuario, id_libro, fecha_prestamo, fecha_devolucion, estado) 
                VALUES (:id_usuario, :id_libro, :fecha_prestamo, :fecha_devolucion, :estado)";

        // Preparamos la consulta
        $stmt = $conexion->prepare($sql);

        // Asignamos los valores a los parámetros
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':id_libro', $id_libro, PDO::PARAM_INT);
        $stmt->bindParam(':fecha_prestamo', $fecha_prestamo);
        $stmt->bindParam(':fecha_devolucion', $fecha_devolucion);
        $stmt->bindParam(':estado', $estado);

        // Ejecutamos la consulta
        if ($stmt->execute()) {
            echo "Préstamo registrado exitosamente";
        } else {
            echo "Error al registrar el préstamo";
        }
    } else {
        echo "Todos los campos son obligatorios";
    }
}
?>
