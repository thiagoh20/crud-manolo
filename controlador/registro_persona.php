<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["tipo_doc"]) and !empty($_POST["documento"]) and !empty($_POST["correo"])) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $tipo_doc = $_POST["tipo_doc"];
        $documento = $_POST["documento"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("INSERT INTO usuarios ( Nombres, Apellidos, Tipo_de_documento, documento, correo) VALUES 
        ( '$nombre', '$apellido', '$tipo_doc', '$documento', '$correo')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona Registrado Correctamente! </div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona! </div>';
        }

    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio! </div>';
    }
}
