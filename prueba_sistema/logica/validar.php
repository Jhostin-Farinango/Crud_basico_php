<?php
include('db.php');
session_start();

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];

$consulta = "SELECT * FROM user WHERE usuario = '$user' AND contraseña = '$pass' ";
$resultado = mysqli_query($cnx, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    $_SESSION['username'] = $user;
    header("location:index.php");
} else {
    include("login.php");
    ?>
    <h1>Error de Credenciales intentalo de nuevo</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($cnx);

?>
