<?php
$host = "localhost";
$usuario = "hoatzins_11";
$contrasenia = "Kp20bOCP4PoB";
$base_de_datos = "hoatzins_11";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;