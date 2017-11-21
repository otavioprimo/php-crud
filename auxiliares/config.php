<?php
$databaseHost = 'localhost';
$databaseName = 'lista_compra';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (!$mysqli) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
