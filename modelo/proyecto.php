<?php

include_once MODELO . '/sql/base_de_datos.php';

function Crear($nombre_proyecto, $autores_proyecto, $nombre_asesor, $fecha_ingreso, $nota_recibida, $linea_investigacion) {
    global $gbd;
    $sql = "INSERT INTO `Registro_de_Proyecto`"
            . "("
            . "`nombre_proyecto`"
            . ", `autores_proyecto`"
            . ", `nombre_asesor`"
            . ", `fecha_ingreso`"
            . ", `nota_recibida`"
            . ", `linea_investigacion`"
            . ")"
            . "VALUES "
            . "("
            . "'$nombre_proyecto'"
            . ",'$autores_proyecto'"
            . ", '$nombre_asesor'"
            . ",'$fecha_ingreso'"
            . ", '$nota_recibida'"
            . ", '$linea_investigacion'"
            . ");";

    $gbd->query($sql);
}

function Leer($id_proyecto = NULL) {
    global $gbd;
    $sql = "SELECT * FROM `Registro_de_Proyecto`";
    if ($id_proyecto) $sql = $sql . " WHERE id_proyecto = $id_proyecto";
    $sentencia = $gbd->query($sql);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function Modificar($id_proyecto, $nombre_proyecto, $autores_proyecto, $nombre_asesor, $fecha_ingreso, $nota_recibida, $linea_investigacion) {
    global $gbd;
    $sql = "UPDATE `Registro_de_Proyecto` SET "
            . " `nombre_proyecto` = '$nombre_proyecto'"
            . ", `autores_proyecto` = '$autores_proyecto'"
            . ", `nombre_asesor` = '$nombre_asesor'"
            . ", `fecha_ingreso` = '$fecha_ingreso'"
            . ", `nota_recibida` = '$nota_recibida'"
            . ", `linea_investigacion` = '$linea_investigacion'"
            . "WHERE `id_proyecto` = '$id_proyecto'";
    $gbd->query($sql);
}

function Eliminar($id_proyecto) {
    global $gbd;
    $sql = "DELETE FROM `Registro_de_Proyecto` WHERE `id_proyecto` = $id_proyecto";
    $gbd->query($sql);
}

function Buscar($buscar){
if (!isset($buscar)){ 
      echo "Debe especificar una cadena a bucar"; 
      echo "</html></body> \n"; 
      exit; 
} 
$link = mysql_connect("localhost", "root"); 
mysql_select_db("registro_de_proyecto", $link); 
$result = mysql_query("SELECT * FROM nombre_proyecto WHERE nombre_proyecto LIKE '%$buscar%' ORDER BY nombre_proyecto", $link); 
if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["id"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["direccion"]."</td> \n"; 
            echo "<td>".$row["telefono"]."</td> \n"; 
            echo "<td><a href='mailto:".$row["email"]."'>".$row["email"]."</a></td> \n"; 
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
}



