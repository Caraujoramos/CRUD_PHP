<?php

define('RAIZ', __DIR__);
define('MODELO', RAIZ . '/modelo');
define('CONTROLADOR', RAIZ . '/controlador');
define('VISTA', RAIZ . '/vista');
define('CSS', VISTA . '/css');
define('JS', VISTA . '/js');

define('URL_RAIZ', 'http://localhost/CRUD');
define('URL_CSS', 'http://localhost/CRUD/vista/css');
define('URL_JS', 'http://localhost/CRUD/vista/js');
define('URL_IMG', 'http://localhost/CRUD/vista/img');

if (isset($_GET['controlador'])) {
    $controlador = $_GET['controlador'];
    include 'controlador/c_' . $controlador . '.php';
} else {
    include 'controlador/c_predeterminado.php';
}