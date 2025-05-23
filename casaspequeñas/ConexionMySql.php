<?php
$host = "localhost";
$dbnombre = "databaseinmobiliaria";
$usuario = "root";
$contraseña = "";

$conexion = new PDO("mysql:host=$host;dbname=$dbnombre;charset=utf8mb4",$usuario,$contraseña);

?>
