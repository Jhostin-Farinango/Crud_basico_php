<?php
$id = $_GET['id'];


$cnx = mysqli_connect("localhost", "root", "", "db_prubas");
$sql = "DELETE FROM socios WHERE id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta) {
    echo "No se Elimino";
} else {
    header("Location: index.php");
}
?>