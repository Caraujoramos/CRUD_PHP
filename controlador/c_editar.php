<?php
include_once MODELO . '/proyecto.php';

if (isset($_POST) && count($_POST)) {
    $id_proyecto = $_POST['id_proyecto'];
    $nombre_proyecto = $_POST['nombre_proyecto'];
    $autores_proyecto = $_POST['autores_proyecto'];
    $nombre_asesor = $_POST['nombre_asesor'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $nota_recibida = $_POST['nota_recibida'];
    $linea_investigacion = $_POST['linea_investigacion'];    
    
    Modificar($id_proyecto, $nombre_proyecto, $autores_proyecto, $nombre_asesor, $fecha_ingreso, $nota_recibida, $linea_investigacion);
    include_once 'c_lista.php';
    
} else {
    $id_proyecto = $_GET['id'];
    $consulta = Leer($id_proyecto);
    $consulta[0]['autores_proyecto'] = explode(';',$consulta[0]['autores_proyecto']);
    include_once VISTA . '/modificar_proyecto.php';
}

