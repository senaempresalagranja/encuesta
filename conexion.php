<?php

$host = "localhost";
$usuario = "root";
$contrasena = "";
$db = "encuesta";

$conectarBD = new mysqli($host, $usuario, $contrasena, $db);
mysqli_set_charset($conectarBD, "utf8");


