<?php
/*
* Script: Conexión a base de datos de MySQL con PHP
*/


/* Creando una nueva conexión a la base de datos. */
$conn = new mysqli("localhost", "root", "", "jilotepec_umb_bd");

/* Comprobando si hay un error de conexión. */
if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}