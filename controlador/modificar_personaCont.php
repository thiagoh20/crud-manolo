<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["tipo_doc"]) and !empty($_POST["documento"]) and !empty($_POST["correo"])) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $tipo_doc = $_POST["tipo_doc"];
        $documento = $_POST["documento"];
        $correo = $_POST["correo"];
    
        // Preparar la consulta de actualización
        $stmt = $conexion->prepare("UPDATE usuarios SET Nombres = ?, Apellidos = ?, Tipo_de_documento = ?, documento = ?, correo = ? WHERE id = ?");
        if ($stmt === false) {
            echo '<div class="alert alert-danger">Error en la preparación de la consulta: ' . $conexion->error . '</div>';
        } else {
            // Vincular los parámetros
            $stmt->bind_param("sssssi", $nombre, $apellido, $tipo_doc, $documento, $correo, $id);
    
            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo '<div class="alert alert-success">Registro actualizado correctamente!</div>';
                header("location:index.php");
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