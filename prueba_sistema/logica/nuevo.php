<?php
session_start();
$Usuario = $_SESSION['username'];

if (!isset($Usuario)) {
    header("location: login.php");
} else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="sp_insertar.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar Datos:</td>
                </tr>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" id="" title="Cedula" minlength="10" maxlength="10"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id=""></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido" id=""></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="email" name="correo" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php
}
?>