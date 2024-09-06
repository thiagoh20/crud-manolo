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
    <h1 class="text-center p-2">Libros</h1>
    <?php
    include "modelo/conexion.php";
    include "librosControlador/registro_libro.php";
    include "librosControlador/eliminar_LibroControl.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro del Libros</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo del libros</label>
                <input type="text" class="form-control" name="titulo">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> ISBN</label>
                <input type="number" class="form-control" name="isbn">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial">
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Categoria</label>
                <select id="disabledSelect" class="form-select" name="categoria">
                    <option value="ficcion" default>Ficción</option>
                    <option value="no_ficcion">No Ficción</option>
                    <option value="ciencia_ficcion">Ciencia Ficción</option>
                    <option value="fantasia">Fantasía</option>
                    <option value="misterio">Misterio</option>
                    <option value="romance">Romance</option>
                    <option value="terror">Terror</option>
                    <option value="aventura">Aventura</option>
                    <option value="biografia">Biografía</option>
                    <option value="historia">Historia</option>
                    <option value="poesia">Poesía</option>
                    <option value="drama">Drama</option>
                    <option value="autoayuda">Autoayuda</option>
                    <option value="ensayo">Ensayo</option>
                    <option value="comedia">Comedia</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad disponible</label>
                <input type="number" class="form-control" name="cantidad_disponible">
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrarLibro" value="ok">Registrar</button>
            <a href="inicioBiblio.php">
            <button  type="button" class="btn btn-secondary">Regresar</button>
        </a>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Género</th>
                        <th scope="col">Cantidad Disponible</th>
                        <th scope="col"></th> <!-- Esta columna puede ser para acciones como editar o eliminar -->
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include "modelo/conexion.php";
                    // Preparar la consulta
                    $stmt = $conexion->prepare("SELECT ID, Titulo, Autor, ISBN, Editorial,Categoria, Cantidad_disponible FROM libros");


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
                        $link = 'modificar_libro.php?id=' . $datos->ID;
                        $link2 = 'Libro.php?id=' . $datos->ID;
                        echo <<<HTML
                <tr>
                    <th scope="row">{$datos->ID}</th>
                    <td>{$datos->Titulo}</td>
                    <td>{$datos->Autor}</td>
                    <td>{$datos->ISBN}</td>
                    <td>{$datos->Editorial}</td>
                    <td>{$datos->Categoria}</td>
                    <td>{$datos->Cantidad_disponible}</td>
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