<?php
include "modelo/conexion.php";

$id = $_GET['id'];

// Obtener los datos actuales del usuario
$stmt = $conexion->prepare("SELECT Nombres, Apellidos, tipo_doc, documento, correo FROM usuarios WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$datos = $result->fetch_object();
$stmt->close();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/488b60e22f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form class="col-4 pt-5 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar personas</h3>
            <?php
            include "controlador/modificar_personaCont.php";
            ?>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombres; ?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->Apellidos; ?>">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tipo de documento</label>
                <select id="disabledSelect" class="form-select" name="tipo_doc" value="<?= $datos->tipo_doc; ?>">
                    <option>Targeta de Identidad</option>
                    <option>Cedula de Ciudadania</option>
                    <option>Cedula de Extrangeria</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cedula" class="form-label">Documento</label>
                <input type="text" class="form-control" name="documento" value="<?= $datos->documento; ?>">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" value="<?= $datos->correo; ?>">
            </div>

            
            <button type="submit" name="btnregistrarindex" class="btn btn-primary" value="ok">Actualizar</button>
        </form>
    </div>
    <script src="path/to/bootstrap.js"></script> <!-- Reemplaza con la ruta a tu archivo JS de Bootstrap -->
</body>

</html>