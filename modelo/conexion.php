<?php
$servername = "localhost";
$username = "biblioteca";
$password = "biblio_manolo";
$dbname = "biblioteca";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname, 3307);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
  //  echo "Se conectó con la base de datos correctamente";
}

// Aquí puedes agregar tu código para interactuar con la base de datos

// Cerrar la conexión

