<?php
session_start();

// Simulamos un usuario y contraseña
$usuario_valido = 'usuario';
$contrasena_valida = 'contrasena';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
        $_SESSION['usuario'] = $usuario;
        header('Location: bienvenido.php');
        exit();
    } else {
        $error = 'Usuario o contraseña incorrectos.';
    }
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="input-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="text" id="contrasena" name="contrasena" required>
            </div>

            <button type="submit">Entrar</button> <br>
            <p>¿No tienes una cuenta? <a href="registro_login.php">Registrar</a></p>

        </form>
    </div>
</body>
</html>
