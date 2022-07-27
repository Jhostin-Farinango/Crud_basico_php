<?php
session_start();
$Usuario = $_SESSION['username'];

if (!isset($Usuario)) {
    header("location: login.php");
} else {
    echo "<h1>Bienvenido $Usuario </h1>";

    echo "<a href='salir.php'>Salir</a>";
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
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>

    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td>
                <td>Opciones</td>
                <?php
                include('db.php');
                $sql = "SELECT id, nombre, apellido, correo FROM socios order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td><?php echo $mostrar['3'] ?></td>
                <td>
                    <a href="editar.php?
                            id=<?php echo $mostrar['0'] ?> &
                            nombre=<?php echo $mostrar['1'] ?> &
                            apellido=<?php echo $mostrar['2'] ?> &
                            correo=<?php echo $mostrar['3'] ?>
                            ">Editar</a>
                    <a href="eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php
                }
        ?>
        </tr>
        </table>
    </div>
</body>

</html>
<?php
}
?>