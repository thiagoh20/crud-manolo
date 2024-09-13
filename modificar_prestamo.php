<<<<<<< HEAD
<?php
include "modelo/conexion.php";

$id = $_GET['id'];

// Obtener los datos actuales del usuario
$stmt = $conexion->prepare("SELECT id_usuario, id_libro, fecha_prestamo, fecha_devolucion, estado FROM prestamos WHERE ID = ?");
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
            <h3 class="text-center text-secondary">Modificar prestamo</h3>
            <?php
            include "prestamocontrolador/modificar_prestamoCont.php";
            ?>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id usuario</label>
                <input readonly type="text" class="form-control" name="id_usuario" value="<?= $datos->id_usuario; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id libro</label>
                <input readonly  type="text" class="form-control" name="id_libro" value="<?= $datos->id_libro; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de prestamo</label>
                <input type="date" class="form-select" name="fecha_prestamo" value="<?= $datos->fecha_prestamo; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de devolucion</label>
                <input type="text" class="form-control" name="fecha_devolucion" value="<?= $datos->fecha_devolucion; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado" value="<?= $datos->estado; ?>">
            </div>

            
            <button type="submit" name="btnregistrarprestamo" class="btn btn-primary" value="ok">Actualizar</button>
        </form>
    </div>
    <script src="path/to/bootstrap.js"></script> <!-- Reemplaza con la ruta a tu archivo JS de Bootstrap -->
</body>

=======
<?php
include "modelo/conexion.php";

$id = $_GET['id'];

// Obtener los datos actuales del usuario
$stmt = $conexion->prepare("SELECT id_usuario, id_libro, fecha_prestamo, fecha_devolucion, estado FROM prestamos WHERE ID = ?");
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
            <h3 class="text-center text-secondary">Modificar prestamo</h3>
            <?php
            include "prestamocontrolador/modificar_prestamoCont.php";
            ?>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id usuario</label>
                <input type="text" class="form-control" name="id_usuario" value="<?= $datos->id_usuario; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id libro</label>
                <input type="text" class="form-control" name="id_libro" value="<?= $datos->id_libro; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de prestamo</label>
                <input type="date" class="form-select" name="fecha_prestamo" value="<?= $datos->fecha_prestamo; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de devolucion</label>
                <input type="text" class="form-control" name="fecha_devolucion" value="<?= $datos->fecha_devolucion; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado" value="<?= $datos->estado; ?>">
            </div>

            
            <button type="submit" name="btnregistrarprestamo" class="btn btn-primary" value="ok">Actualizar</button>
        </form>
    </div>
    <script src="path/to/bootstrap.js"></script> <!-- Reemplaza con la ruta a tu archivo JS de Bootstrap -->
</body>

>>>>>>> 30f7b6bbb6a7fb1e6f03cc029a7ef90d0a25bcec
</html>