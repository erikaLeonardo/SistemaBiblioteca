<?php
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$baseDatos = "jilotepec_umb_bd";

$conn = mysqli_connect(
    $servidor,
    $usuario,
    $contrasenia,
    $baseDatos
) or die
("Problemas al conectar con el servidor de la base de datos");

?>