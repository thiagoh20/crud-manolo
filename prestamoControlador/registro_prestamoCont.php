<?php

if (!empty($_POST["btnregistrarprestamos"])) {
    if ( !empty($_POST["id_usuario"]) and !empty($_POST["id_libro"]) and !empty($_POST["fecha_prestamo"]) and !empty($_POST["fecha_devolucion"]) and !empty($_POST["estado"])) {


        $id_usuario = $_POST["id_usuario"];
        $id_libro = $_POST["id_libro"];
        $fecha_prestamo = $_POST["fecha_prestamo"];
        $fecha_devolucion = $_POST["fecha_devolucion"];
        $estado = $_POST["estado"];
    
        $sql = $conexion->query("INSERT INTO prestamos ( id_usuario, id_libro, fecha_prestamo, fecha_devolucion, estado) VALUES 
        ('$id_usuario', '$id_libro', '$fecha_prestamo','$fecha_devolucion', '$estado')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona Registrado Correctamente! </div>';
            header("location:Prestamos.php");
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona! </div>';
        }

    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio! </div>';
    }
}
