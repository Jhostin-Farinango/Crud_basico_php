<?php
session_start();
$Usuario = $_SESSION['username'];
if (!isset($Usuario)) {
    header("location: login.php");
} else {

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$id = $_POST['id'];
$correo = $_POST['correo'];

$cnx = mysqli_connect("localhost", "root", "", "db_prubas");
$sql = "UPDATE socios set id = '$id', nombre = '$nombre', apellido = '$apellido', correo = '$correo' WHERE id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta) {
    echo "No se Actualizo";
} else {
    header("Location: index.php");
}
}
?>
