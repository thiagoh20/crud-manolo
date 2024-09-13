<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/488b60e22f.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-2">Usuarios</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/registro_persona.php";
    include "controlador/eliminar_personaControl.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Usuarios</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tipo de documento</label>
                <select id="disabledSelect" class="form-select" name="tipo_doc">
                    <option>Targeta de Identidad</option>
                    <option>Cedula de Ciudadania</option>
                    <option>Cedula de Extrangeria</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento</label>
                <input type="text" class="form-control" name="documento">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="Email" class="form-control" name="correo">
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        <a href="inicioBiblio.php">
            <button  type="button" class="btn btn-secondary">Regresar</button>
        </a>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Tipo de documento</th>
                        <th scope="col">Documento</th>
                        <th scope="col">correo</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include "modelo/conexion.php";
                    // Preparar la consulta
                    $stmt = $conexion->prepare("SELECT ID, Nombres, Apellidos, tipo_doc, documento, correo FROM usuarios");

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
                        $link = 'modificar_persona.php?id=' . $datos->ID;
                        $link2 = 'index.php?id=' . $datos->ID;
                        echo <<<HTML
                <tr>
                    <th scope="row">{$datos->ID}</th>
                    <td>{$datos->Nombres}</td>
                    <td>{$datos->Apellidos}</td>
                    <td>{$datos->tipo_doc}</td>
                    <td>{$datos->documento}</td>
                    <td>{$datos->correo}</td>
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

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/488b60e22f.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-2">Usuarios</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/registro_persona.php";
    include "controlador/eliminar_personaControl.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Usuarios</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tipo de documento</label>
                <select id="disabledSelect" class="form-select" name="tipo_doc">
                    <option>Targeta de Identidad</option>
                    <option>Cedula de Ciudadania</option>
                    <option>Cedula de Extrangeria</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento</label>
                <input type="text" class="form-control" name="documento">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="Email" class="form-control" name="correo">
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        <a href="inicioBiblio.php">
            <button  type="button" class="btn btn-secondary">Regresar</button>
        </a>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Tipo de documento</th>
                        <th scope="col">Documento</th>
                        <th scope="col">correo</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include "modelo/conexion.php";
                    // Preparar la consulta
                    $stmt = $conexion->prepare("SELECT ID, Nombres, Apellidos, tipo_doc, documento, correo FROM usuarios");

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
                        $link = 'modificar_persona.php?id=' . $datos->ID;
                        $link2 = 'index.php?id=' . $datos->ID;
                        echo <<<HTML
                <tr>
                    <th scope="row">{$datos->ID}</th>
                    <td>{$datos->Nombres}</td>
                    <td>{$datos->Apellidos}</td>
                    <td>{$datos->tipo_doc}</td>
                    <td>{$datos->documento}</td>
                    <td>{$datos->correo}</td>
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

>>>>>>> 30f7b6bbb6a7fb1e6f03cc029a7ef90d0a25bcec
</html>