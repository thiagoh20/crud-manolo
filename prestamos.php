<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/488b60e22f.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-2">Prestamos</h1>
    <?php
    include "modelo/conexion.php";
    include "prestamoControlador/registro_prestamoCont.php";
    include "prestamoControlador/eliminar_prestamoCont.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro del prestamo</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id usuario</label>
                <input type="number" class="form-control" name="id_usuario">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Id libro</label>
                <input type="number" class="form-control" name="id_libro">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha prestamo</label>
                <input type="date" class="form-control" name="fecha_prestamo">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha devolucion</label>
                <input type="date" class="form-control" name="fecha_devolucion">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado">
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrarprestamos" value="ok">Ingresar</button>
            <a href="inicioBiblio.php">
            <button  type="button" class="btn btn-secondary">Regresar</button>
        </a>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Id usuario</th>
                        <th scope="col">Id libro</th>
                        <th scope="col">Fecha prestamo</th>
                        <th scope="col">Fecha devolucion</th>
                        <th scope="col">Estado</th>
                        <th scope="col"></th> <!-- Esta columna puede ser para acciones como editar o eliminar -->
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include "modelo/conexion.php";
                    // Preparar la consulta
                    $stmt = $conexion->prepare("SELECT ID, ID_usuario, ID_libro, Fecha_prestamo, Fecha_devolucion,Estado FROM prestamos");


                    // Verificar si la consulta se preparó correctamente
                    if ($stmt === false) {
                        die("Error en la consulta SQL: " . $conexion->error);
                    }
                    // Ejecutar la consulta
                    $stmt->execute();

                    // Obtener los resultados
                    $result = $stmt->get_result();

                    // Generar las filas de la tabla dinámicamente
                    while ($datos = $result->fetch_object()) {
                        $link = 'modificar_prestamo.php?id=' . $datos->ID;
                        $link2 = 'prestamos.php?id=' . $datos->ID;
                        echo <<<HTML
                <tr>
                    <th scope="row">{$datos->ID}</th>
                    <td>{$datos->ID_usuario}</td>
                    <td>{$datos->ID_libro}</td>
                    <td>{$datos->Fecha_prestamo}</td>
                    <td>{$datos->Fecha_devolucion}</td>
                    <td>{$datos->Estado}</td>

                    <td>
                        <a href=$link  class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href=$link2 class="btn btn-small btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                </tr>
HTML;
                    }

                    // Cerrar la declaración y la conexión
                    $stmt->close();
                    $conexion->close();
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>