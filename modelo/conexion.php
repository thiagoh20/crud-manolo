<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
  //  echo "Se conectó con la base de datos correctamente";
}

// Aquí puedes agregar tu código para interactuar con la base de datos

// Cerrar la conexión

