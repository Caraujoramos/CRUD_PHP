<?php

include_once MODELO . '/proyecto.php';


$id_proyecto = $_GET['id'];
Eliminar($id_proyecto);

include_once 'c_lista.php';

