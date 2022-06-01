<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="validar.php" method="POST">
        <label for="nombre">Usuario</label>
        <br>
        <input type="text" name="usr" placeholder="Usuario" required>
        <br><br>
        <label for="nombre">Contraseña</label>
        <br>
        <input type="password" name="pas" placeholder="Contraseña" required>
        <br><br>
        <input type="submit" name="entrar">
    </form>
</body>
</html>