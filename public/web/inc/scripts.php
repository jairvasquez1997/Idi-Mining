<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<!-- JQUERY -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/jquery-1.11.3.min.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/jquery.bootstrap-touchspin.min.js"></script>
<!-- Revolution Slider -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/owl.carousel.min.js"></script>
<!-- Overflow Text -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/overflow-text.js"></script>
<!-- Easing -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/jquery.easing.min.js"></script>
<!-- Select to div -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/select2.min.js"></script>
<!-- Parallax -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/jquery.parallax-1.1.3.js"></script>
<!-- Waypoint -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/waypoints.min.js"></script>
<!-- Count To -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/jquery.magnific-popup.min.js"></script>
<!-- Image Loaded -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/imagesloaded.pkgd.min.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/lib/isotope.pkgd.min.js"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="<?php echo SERVIDOR; ?>/js/scripts.js"></script>

<script>
    $(function () {

        var sound = true;
        var v = document.getElementsByTagName("audio")[0];
        var button_play = document.getElementById("button_play");

        var audio_accion = {
            iniciar: function (v) {
                v.play();
            },
            detener: function (v) {
                v.pause();
            }
        };

        audio_accion.iniciar(v);
        button_play.addEventListener("click", function () {
            if (sound) {
                v.pause();
                button_play.innerHTML = '<i class="fa fa-volume-up" style="font-size: 2.7em;"></i>';
                sound = false;
            } else {
                v.play();
                button_play.innerHTML = '<i class="fa fa-volume-off" style="font-size: 2.7em;"></i>';
                sound = true;
            }
        });
    });

</script>