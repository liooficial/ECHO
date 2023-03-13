<?php
$conn = mysqli_connect('192.168.0.12', 'php', 'uiop0988765', 'Progama1');
$sql = "SELECT * FROM Temperatura";
$resultado = mysqli_query($conn, $sql);
$datos = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila;
}
mysqli_close($conn);
?>
