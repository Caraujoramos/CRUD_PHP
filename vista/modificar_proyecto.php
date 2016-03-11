<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <title>Trabajos de Grado</title>
        <?php include VISTA . '/cabecera.php'; ?>
    </head>

    <body id="pageBody">

        <div id="divBoxed" class="container">           
                
                <?php include VISTA . '/barra_menu.php';?>
            
                <form method="post" action="<?= URL_RAIZ ?>/index.php?controlador=editar">
                    <div class="container">

                        <div class="form-group">
                            <label for="id_proyecto">ID Proyecto:</label>
                            <input class="form-control" type="int" name="id_proyecto" readonly="readonly" value="<?= $consulta[0]['id_proyecto'] ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="nombre_proyecto">Nombre Proyecto:</label>
                            <input class="form-control"  type="text" name="nombre_proyecto"  value="<?= $consulta[0]['nombre_proyecto'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="autores proyecto">Autores Proyecto:</label>
                            <input class="form-control"   type="text" name="autores_proyecto"  value="<?= $consulta[0]['autores_proyecto'][0] ?>"/>
                            <input class="form-control"   type="text" name="autores_proyecto"  value="<?= $consulta[0]['autores_proyecto'][1] ?>"/>
                            <input class="form-control"   type="text" name="autores_proyecto"  value="<?= $consulta[0]['autores_proyecto'][2] ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="nombre asesor">Nombre Asesor:</label>
                            <input class="form-control"  type="text" name="nombre_asesor" value="<?= $consulta[0]['nombre_asesor'] ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="fecha ingreso">Fecha Ingreso:</label>
                            <input class="form-control"  type="date" name="fecha_ingreso" value="<?= $consulta[0]['fecha_ingreso'] ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="nota_recibida">Nota Recibida:</label>
                            <input class="form-control"  type="float" name="nota_recibida" value="<?= $consulta[0]['nota_recibida'] ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="linea_investigacion">Linea Investigacion:</label>
                            <input class="form-control"  type="text" name="linea_investigacion" value="<?= $consulta[0]['linea_investigacion'] ?>"/>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>

            </div>



            <div id="footerOuterSeparator"></div>

            <div id="divFooter" class="footerArea">

                <div class="divPanel">



                    <br /><br />


                    <div class="row-fluid">
                        <div class="span12">
                            <p class="copyright">
                                Copyright © 2016 DesarrolloWeb. All Rights Reserved.
                            </p><br>

                            <p class="social_bookmarks">
                                <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
                                <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                                <a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
                                <a href="#"><i class="social foundicon-rss"></i> Rss</a>
                            </p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <br /><br /><br />

        <script src="scripts/jquery.min.js" type="text/javascript"></script> 
        <script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/default.js" type="text/javascript"></script>


        <script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({responsive: true, width: '100%', scroll: 2, items: {width: 320, visible: {min: 2, max: 6}}});</script><script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
        <script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
        <script type="text/javascript">function startCamera() {
                $('#camera_wrap').camera({fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true});
            }
            $(function () {
                startCamera()
            });</script>

    </body>
</html>