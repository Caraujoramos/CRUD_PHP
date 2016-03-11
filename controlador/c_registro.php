<?php

if (isset($_POST) && count($_POST)) {
    
    print_r($_POST);
   
    $nombre_proyecto = $_POST['nombre_proyecto'];
    $autores_proyecto = implode(';',$_POST['autores_proyecto']);
    $nombre_asesor = $_POST['nombre_asesor'];
    $fecha_ingreso= $_POST['fecha_ingreso'];
    $nota_recibida= $_POST['nota_recibida'];
    $linea_investigacion= $_POST['linea_investigacion'];
    
    include_once MODELO . '/proyecto.php';
    Crear($nombre_proyecto, $autores_proyecto, $nombre_asesor, $fecha_ingreso, $nota_recibida, $linea_investigacion);
    
    include_once VISTA . '/index.php';
} else {
    include_once VISTA . '/registrar_proyecto.php';
}