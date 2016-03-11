<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <title>Trabajos de Grado</title>

        <?php include VISTA . '/cabecera.php'; ?>

    </head>

    <body id="pageBody">

        <div id="divBoxed" class="container">

            <?php include VISTA . '/barra_menu.php'; ?>


            <div class="row-fluid">
                <div class="span12">
                    <div id="headerSeparator"></div>
                    <div class="camera_full_width">
                        <div id="camera_wrap">                                
                            <div data-src="slider-images/1.jpg" ><div class="camera_caption fadeFromBottom cap1">Comprometida en el Area del Desarrollo Web</div></div>
                            <div data-src="slider-images/2.jpg" ><div class="camera_caption fadeFromBottom cap2">Formando Ingenieros en el Desarrollo de Aplicaciones Web</div></div>
                            <div data-src="slider-images/3.jpg" ><div class="camera_caption fadeFromBottom cap2">Capacitación en el Desarrollo Web</div></div>
                        </div>
                        <br style="clear:both"/><div style="margin-bottom:40px"></div>
                    </div>              
                </div>
            </div>
        </div>


        <div class="contentArea">
            <div class="divPanel notop page-content">
                <div class="row-fluid">
                    <div class="span12" id="divMain">
                        <h2>BIENVENIDOS</h2>

                        <p class="Estandar"><strong>El trabajo de Grado</strong> es un ejercicio de profundización desarrollado por el estudiante de pregrado como requisito para optar al título profesional que mediante la integración y aplicación teórica o teórico-práctica de conocimientos y habilidades o a través de la generación de nuevo conocimiento, busca fortalecer las distintas competencias adquiridas durante su proceso de formación y, así mismo, contribuir al análisis y solución creativa de una problemática relacionada con el objeto de estudio o campo de acción de su profesión.</p><br>
                        <p class="Estandar">Esta página es un espacio de orientación para la comunidad universitaria, y como tal, presenta una serie de documentos e instructivos que servirán como guía durante el proceso de elaboración, desarrollo, presentación, sustentación, entrega y valoración de las distintas modalidades establecidas en la asignatura Trabajo de Grado.</p><br/><br/>                 
                    </div>
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
        });
    </script>

</body>
</html>