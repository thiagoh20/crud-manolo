<?php

if (!empty($_POST["btnregistrarLibro"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["isbn"]) and !empty($_POST["editorial"]) and !empty($_POST["categoria"]) and !empty($_POST["cantidad_disponible"])) {
        
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $isbn = $_POST["isbn"];
        $editorial = $_POST["editorial"];
        $categoria = $_POST["categoria"];
        $cantidad_disponible = $_POST["cantidad_disponible"];
        
        // Preparar la consulta de actualización
        $stmt = $conexion->prepare("UPDATE libros SET Titulo = ?, Autor = ?, ISBN = ?, Editorial = ?, Categoria = ?, Cantidad_disponible = ? WHERE ID = ?");
        if ($stmt === false) {
            echo '<div class="alert alert-danger">Error en la preparación de la consulta: ' . $conexion->error . '</div>';
        } else {
            // Vincular los parámetros. Los tipos de datos son 's' (string) para todos excepto 'i' (integer) para el ID.
            $stmt->bind_param("ssssssi", $titulo, $autor, $isbn, $editorial, $categoria, $cantidad_disponible, $id);
        
            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo '<div class="alert alert-success">¡Registro actualizado correctamente!</div>';
                header("location:Libro.php");
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