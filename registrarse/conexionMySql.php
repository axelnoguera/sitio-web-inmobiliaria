<?php
$host = "localhost";
$dbnombre = "databaseinmobiliaria";
$us = "root";
$contraseña = "";

$conexion = new PDO("mysql:host=$host;dbname=$dbnombre;charset=utf8mb4",$us,$contraseña);

?>