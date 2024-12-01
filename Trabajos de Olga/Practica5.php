<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos="mibase";

$conn = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conn->connect_error) {
die("Conexión fallida - ERROR de conexión: " . $conn->connect_error);
}
echo "Conexión OK";
?>