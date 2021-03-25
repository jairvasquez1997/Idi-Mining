<?php
include_once '../app/config.php';
?>
<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="" lang="en">
<!--<![endif]-->

<!-- Mirrored from envato.megadrupal.com/html/cortana/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 14:44:43 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IDI-MINING</title>

    <?php include_once '../inc/styles.php'; ?>

</head>

<body>
<?php include_once '../inc/header.php'; ?>
<?php include_once '../sound2.php'; ?>

<div id="page-wrap">
    <!-- SUB HEADER -->
    <section id="sub-header" class="section bg-parallax pb-0" data-background="img/bg/demo.jpg">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1> INNOVACIONES</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo SERVIDOR; ?>/index.php">Home</a>
                        </li>
                        <li>
                            Innovaciones
                        </li>

                    </ul>
                </div>
                <!-- /breadcrumb -->
            </div>
            <!-- /sub-wrapper -->
        </div>
        <!-- /container -->
    </section>
    <!-- END / SUB HEADER -->

    <!-- CONTENT -->
    <section class="section bg-white pt-70 pb-60 textura">
        <div class="container">
            <div class="row">
                <div class="col-md-12  col-sm-12 col-xs-12">
                    <div id="content" class="site-content">
                        <main id="main">
                            <h2 class="section-header">Investigaciones en Proceso</h2>

                            <!-- /work-item-slider-wrapper -->
                            <div class="isotope-grid-wrapper" data-isotope-column="3" data-column-gap="30"
                                 data-column-md="3" data-column-sm="2" data-column-xs="1"
                                 data-column-tn="1">
                                <div class="isotope-grid-row">
                                    <div class="isotope-grid">
                                        <div class="grid-sizer"></div>
                                        <!-- <div class="gutter-sizer"></div> -->
                                        <div class="portfolio-item building">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/portfolio/4big.jpg" alt=""/>
                                                <a href="detalle/detalle_rotation.php" class="overlay">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                <a href="detalle/detalle_rotation.php">
                                                    Rotation restaurant
                                                </a>
                                            </h5>
                                        </div>

                                        <!-- /portfolio-item -->

                                        <div class="portfolio-item building">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/portfolio/2big.jpg" alt=""/>
                                                <a href="detalle/detalle_room.php" class="overlay">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                <a href="detalle/detalle_room.php">
                                                    The new room of surround music

                                                </a>
                                            </h5>
                                        </div>
                                        <!-- /portfolio-item -->

                                        <div class="portfolio-item museum">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/portfolio/3big.jpg" alt=""/>
                                                <a href="detalle/detalle_hidraulico.php" class="overlay">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                <a href="detalle/detalle_hidraulico.php">Hidráulico hoist-carport</a>
                                            </h5>
                                        </div>
                                        <!-- /portfolio-item -->
                                        <div class="portfolio-item office">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/portfolio/1big.jpg" alt=""/>
                                                <a href="detalle/detalle_open.php" class="overlay">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                <a href="detalle/detalle_open.php">The open key, without key. Una llave
                                                    de apertura sin usar llave</a>
                                            </h5>
                                        </div>

                                        <!-- /portfolio-item -->

                                        <div class="portfolio-item urban">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/portfolio/5big.jpg" alt=""/>
                                                <a href="detalle/detalle_protectora.php" class="overlay">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                <a href="detalle/detalldetalle_protectora.php">Manta
                                                    protectora contra el sol para vehículos, de uso automático</a>
                                            </h5>
                                        </div>
                                        <!-- /portfolio-item -->

                                        <div class="portfolio-item house">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/portfolio/8big.jpg" alt=""/>
                                                <a href="detalle/detalle_ascensores.php" class="overlay">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                <a href="detalle/detalle_ascensores.php">
                                                    <?php
                                                    $texto = "Ascensor Personal para 2 o 3 pisos, solo para personas de la 3° edad que no pueden subir escaleras";
                                                    echo substr($texto, 0, 65) . "...";
                                                    ?>


                                                </a>
                                            </h5>
                                        </div>


                                    </div>
                                    <!-- /isotope-grid -->
                                </div>
                                <!-- /isotope-grid-row -->
                            </div>
                            <!-- /isotope-grid-wrapper -->

                            <!-- /page-grid -->
                        </main>
                    </div>
                    <!-- /site-content -->
                </div>
                <!-- /col -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- END / CONTENT -->


    <!-- END / GET QUOTE -->

    <?php include '../inc/footer.php'; ?>
</div>
<!-- /page-wrap -->

<?php include '../inc/scripts.php'; ?>

</body>

<!-- Mirrored from envato.megadrupal.com/html/cortana/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 14:37:20 GMT -->

</html>