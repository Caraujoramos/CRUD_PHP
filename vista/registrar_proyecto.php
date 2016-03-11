<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <title>Trabajos de Grado</title>
        <?php include VISTA .'/cabecera.php'; ?>
    </head>

    <body id="pageBody">

        <div id="divBoxed" class="container">
        
            <?php include VISTA . '/barra_menu.php';?>
            
            <form method="post" action="<?= URL_RAIZ ?>/index.php?controlador=registro">
                <div class="container">

                    <div class="form-group">
                        <label for="nombre_proyecto">Nombre Proyecto:</label>
                        <input class="form-control"  type="text" name="nombre_proyecto"/>
                    </div>
                    <div class="form-group">
                        <label for="autores proyecto">Autores Proyecto:</label>
                        <input class="form-control"   type="text" name="autores_proyecto[]"/>
                        <input class="form-control"   type="text" name="autores_proyecto[]"/>
                        <input class="form-control"   type="text" name="autores_proyecto[]"/>
                    </div>

                    <div class="form-group">
                        <label for="nombre asesor">Nombre Asesor:</label>
                        <input class="form-control"  type="text" name="nombre_asesor"/>
                    </div>

                    <div class="form-group">
                        <label for="fecha ingreso">Fecha Ingreso:</label>
                        <input class="form-control"  type="date" name="fecha_ingreso"/>
                    </div>

                    <div class="form-group">
                        <label for="nota_recibida">Nota Recibida:</label>
                        <input class="form-control"  type="float" name="nota_recibida"/>
                    </div>

                    <div class="form-group">
                        <label for="linea_investigacion">Linea Investigacion:</label>
                        <input class="form-control"  type="text" name="linea_investigacion"/>
                    </div>

                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>





            <div class="contentArea">

                <div class="divPanel notop page-content">


                    <div class="row-fluid">
                        <!--Edit Main Content Area here-->
                        <div class="span12" id="divMain">
                            <h1>Welcome</h1>

                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong> Sed ipsum metus, pulvinar sed volutpat sit amet, fermentum in orci. Quisque vitae neque lectus, quis accumsan massa. Vivamus viverra orci eu dolor tristique sollicitudin. Duis sollicitudin laoreet tellus ac dictum. 
                                Fusce suscipit lectus vel elit posuere volutpat. Morbi ornare eros ut magna ullamcorper feugiat. 
                                Vivamus feugiat ligula vel nisi venenatis eleifend. Morbi accumsan rhoncus viverra. Integer orci nisi, 
                                cursus sit amet luctus quis, dictum eget massa.</p>

                            <br />                   
                            <br />                 

                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="box">
                                        <i class="icon-wrench"></i>
                                        <h4 class="title">Web Design</h4> <hr/>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </p>
                                    </div>
                                </div> 

                                <div class="span3">
                                    <div class="box">
                                        <i class="icon-leaf"></i>
                                        <h4 class="title">Web Development</h4> <hr/>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </p>
                                    </div>
                                </div> 

                                <div class="span3">
                                    <div class="box">
                                        <i class="icon-edit"></i>
                                        <h4 class="title">Custom Themes</h4> <hr/>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </p>
                                    </div>
                                </div> 

                                <div class="span3">
                                    <div class="box">
                                        <i class="icon-signal"></i>
                                        <h4 class="title">SEO</h4> <hr/>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </p>
                                    </div>
                                </div>    </div>



                        </div>
                        <!--End Main Content-->
                    </div>

                    <div id="footerInnerSeparator"></div>
                </div>
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