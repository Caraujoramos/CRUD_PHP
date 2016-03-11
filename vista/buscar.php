<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <?php include VISTA . '/cabecera.php'; ?>    
</head>
<body>
    <div>
        <?php include VISTA . '/barra_menu.php';?>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NOMBRE PROYECTO</td>
                    <td>AUTORES</td>
                    <td>ASESOR</td>
                    <td>NOTA</td>
                    <td>FECHA</td>
                    <td>LINEA</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
               <?php for ($i=0; $i<count($buscar); $i++) {?>
                <tr>
                    
                    <td><?php echo $buscar[$i]['nombre_proyecto'] ?></td>
                    
                    <td>
                        <a href="<?=URL_RAIZ?>/index.php?controlador=editar&id=<?=$consulta[$i]['id_proyecto']?>">editar</a>
                        <a href="<?=URL_RAIZ?>/index.php?controlador=eliminar&id=<?=$consulta[$i]['id_proyecto']?>">eliminar</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>