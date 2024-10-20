<?php
// ID del usuario que deseas consultar
$usuario_id = 1; // Cambia esto por el ID del usuario que quieras consultar

// Consulta SQL
$sql = "
SELECT 
    u.ID AS usuario_id,
    u.Nombres,
    COUNT(p.ID) AS total_prestamos,
    GROUP_CONCAT(l.titulo SEPARATOR ', ') AS libros_prestados
FROM 
    usuarios u
JOIN 
    prestamos p ON u.ID = p.ID_usuario
JOIN 
    libros l ON p.ID_libro = l.ID
WHERE 
    u.ID = 2
GROUP BY 
    u.ID, u.Nombres;

";

// Preparar y ejecutar la consulta
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
$stmt->execute();

// Obtener los resultados
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Mostrar los resultados
if ($resultado) {
    echo "ID de usuario: " . $resultado['usuario_id'] . "<br>";
    echo "Nombre del usuario: " . $resultado['Nombres'] . "<br>";
    echo "Total de préstamos: " . $resultado['total_prestamos'] . "<br>";
    echo "Libros prestados: " . $resultado['libros_prestados'] . "<br>";
} else {
    echo "No se encontraron préstamos para este usuario.";
}
?>
