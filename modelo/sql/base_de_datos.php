<?php

$bd_nombre = 'Proyecto-DW';
$bd_host = 'localhost';
$bd_usuario = 'root';
$bd_clave = '';

$dsn = "mysql:dbname=$bd_nombre;host=$bd_host";
$gbd = new PDO($dsn, $bd_usuario, $bd_clave);