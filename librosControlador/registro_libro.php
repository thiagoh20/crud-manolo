<?php

if (!empty($_POST["btnregistrarLibro"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["isbn"]) and !empty($_POST["editorial"]) and !empty($_POST["categoria"]) and !empty($_POST["cantidad_disponible"])) {

        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $isbn = $_POST["isbn"];
        $editorial = $_POST["editorial"];
        $categoria = $_POST["categoria"];
        $cantidad_disponible = $_POST["cantidad_disponible"];
    
        $sql = $conexion->query("INSERT INTO libros (Titulo, Autor, ISBN, Editorial, Categoria, Cantidad_disponible) VALUES 
        ('$titulo', '$autor', '$isbn', '$editorial','$categoria', '$cantidad_disponible')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona Registrado Correctamente! </div>';
            header("location:Libro.php");
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona! </div>';
        }

    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio! </div>';
    }
}
