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
$sql = "INSERT INTO socios(id, nombre, apellido, correo) VALUES ('$id', '$nombre', '$apellido', '$correo')";
$rta = mysqli_query($cnx, $sql);
if (!$rta) {
    echo "No se Inserto";
} else {
    header("Location: index.php");
}

?>
<?php
}
?>
