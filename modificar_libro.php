<<<<<<< HEAD
<?php
include "modelo/conexion.php";

$id = $_GET['id'];

// Obtener los datos actuales del usuario
$stmt = $conexion->prepare("SELECT ID, Titulo, Autor, ISBN, Editorial,Categoria, Cantidad_disponible FROM libros WHERE ID = ?");
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
            <h3 class="text-center text-secondary">Modificar Libro</h3>
            <?php
            include "librosControlador/modificar_libroCont.php";
            ?>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo del libros</label>
                <input type="text" class="form-control" name="titulo" value="<?= $datos->Titulo; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" value="<?= $datos->Autor; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> ISBN</label>
                <input type="number" class="form-control" name="isbn"value="<?= $datos->ISBN; ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial"value="<?= $datos->Editorial; ?>">
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Categoria</label>
                <select id="disabledSelect" class="form-select" name="categoria" value="<?= $datos->Categoria; ?>">
                    <option value="ficcion" default >Ficción</option>
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
                <input type="number" class="form-control" name="cantidad_disponible" value="<?= $datos->Cantidad_disponible; ?>">
            </div>

            
            <button type="submit" name="btnregistrarLibro" class="btn btn-primary" value="ok">Actualizar</button>

            <a href="Libro.php" class="btn btn-light">Cancelar</i></a>

        </form>
    </div>
    <script src="path/to/bootstrap.js"></script> <!-- Reemplaza con la ruta a tu archivo JS de Bootstrap -->
</body>

=======
<?php
include "modelo/conexion.php";

$id = $_GET['id'];

// Obtener los datos actuales del usuario
$stmt = $conexion->prepare("SELECT ID, Titulo, Autor, ISBN, Editorial,Categoria, Cantidad_disponible FROM libros WHERE ID = ?");
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
            <h3 class="text-center text-secondary">Modificar Libro</h3>
            <?php
            include "librosControlador/modificar_libroCont.php";
            ?>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo del libros</label>
                <input type="text" class="form-control" name="titulo" value="<?= $datos->Titulo; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" value="<?= $datos->Autor; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> ISBN</label>
                <input type="number" class="form-control" name="isbn"value="<?= $datos->ISBN; ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial"value="<?= $datos->Editorial; ?>">
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Categoria</label>
                <select id="disabledSelect" class="form-select" name="categoria" value="<?= $datos->Categoria; ?>">
                    <option value="ficcion" default >Ficción</option>
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
                <input type="number" class="form-control" name="cantidad_disponible" value="<?= $datos->Cantidad_disponible; ?>">
            </div>

            
            <button type="submit" name="btnregistrarLibro" class="btn btn-primary" value="ok">Actualizar</button>

            <a href="Libro.php" class="btn btn-light">Cancelar</i></a>

        </form>
    </div>
    <script src="path/to/bootstrap.js"></script> <!-- Reemplaza con la ruta a tu archivo JS de Bootstrap -->
</body>

>>>>>>> 30f7b6bbb6a7fb1e6f03cc029a7ef90d0a25bcec
</html>