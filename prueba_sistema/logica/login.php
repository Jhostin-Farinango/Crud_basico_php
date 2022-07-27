<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="validar.php" method="POST">
        <h1>Login</h1>
        <p>Usuario <input type="text" placeholder="Usuario" name="usuario" required></p>
        <p>Contraseña <input type="password" placeholder="Contraseña" name="contraseña" required></p>

        <input type="submit" value="ingresar">
        <a href="../leanding_page/index.html">Inicio</a>
    </form>
</body>
</html>