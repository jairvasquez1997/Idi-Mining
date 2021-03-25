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

    <style>
        button.mfp-arrow {
            opacity: unset !important;
        }
    </style>
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
                            <h2 class="section-header">ACTIVIDADES DIVERSAS Y VISITAS DE INVESTIGACIÓN</h2>

                            <!-- /work-item-slider-wrapper -->
                            <div class="isotope-grid-wrapper" data-isotope-column="3" data-column-gap="30"
                                 data-column-md="3" data-column-sm="2" data-column-xs="1"
                                 data-column-tn="1">
                                <div class="isotope-grid-row">
                                    <div class="isotope-grid">
                                        <div class="grid-sizer"></div>

                                        <div class="portfolio-item building">
                                            <div class="portfolio-media hover-link">
                                                <a href="../img/innovaciones/actividades/Foto-1.jpg"
                                                   class="gallery-item-1">
                                                    <img src="../img/innovaciones/actividades/Foto-1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                Investigaciones realizadas en Australia, Perth y Sydney
                                            </h5>
                                        </div>

                                        <div class="portfolio-item building">
                                            <div class="portfolio-media hover-link">
                                                <a href="../img/innovaciones/actividades/Foto-6.jpg"
                                                   class="gallery-item-2">
                                                    <img src="../img/innovaciones/actividades/Foto-6.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                Reencuentro con grandes hombre egresados del alma mater la UNI
                                            </h5>
                                        </div>

                                        <div class="portfolio-item building">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/innovaciones/actividades/Foto-9.jpg" alt=""/>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                Supervisión de instalación de Trafo 5 MVA en una
minera
                                            </h5>
                                        </div>

                                        <div class="portfolio-item building">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/innovaciones/actividades/Foto-12.jpg" alt=""/>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                Nuestra aula de formacion y exposicion
                                            </h5>
                                        </div>

                                        <div class="portfolio-item museum">
                                            <div class="portfolio-media hover-link">
                                                <img src="../img/innovaciones/actividades/Foto-13.jpg" alt=""/>
                                            </div>
                                            <!-- /hover-link -->
                                            <h5 class=" text-center">
                                                Inauguracion de nuevo taller en mina pallancata
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

<script>

    $('.gallery-item-1').magnificPopup({
        items: [
            {
                src: '../img/innovaciones/actividades/Foto-1.jpg',
                title: 'Investigaciones realizadas en Australia, Perth y Sydney'
            },
            {
                src: '../img/innovaciones/actividades/Foto-2.jpg',
                title: 'Investigaciones realizadas en Australia, Perth y Sydney'
            },
            {
                src: '../img/innovaciones/actividades/Foto-3.jpg',
                title: 'Investigaciones realizadas en Australia, Perth y Sydney'
            }
        ],
        gallery: {
            enabled: true,
            tPrev: 'Previous (Left arrow key)',
            tNext: 'Next (Right arrow key)',
            tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
        },
        type: 'image'
    });

    $('.gallery-item-2').magnificPopup({
        items: [
            {
                src: '../img/innovaciones/actividades/Foto-6.jpg',
                title: 'Reencuentro'
            },
            {
                src: '../img/innovaciones/actividades/Foto-8.jpg',
                title: 'Reencuentro'
            }
        ],
        gallery: {
            enabled: true,
            tPrev: 'Previous (Left arrow key)',
            tNext: 'Next (Right arrow key)',
            tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
        },
        type: 'image'
    });

</script>

</body>
<!-- Mirrored from envato.megadrupal.com/html/cortana/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 14:37:20 GMT -->
</html>