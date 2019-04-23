<!DOCTYPE html>
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<!-- Page Title Here -->
<title>CarZone - Car Dealer Automotive Responsive HTML5 Template</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?= build_url_css("plugins.css") ?>">
<link rel="stylesheet" type="text/css" href="<?= build_url_css("style.min.css") ?>">
<link rel="stylesheet" type="text/css" href="<?= build_url_css("templete.min.css") ?>">
<link class="skin" rel="stylesheet" type="text/css" href="<?= build_url_css("skin/skin-1.css") ?>">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="<?= build_url_plugins("revolution/v5.4.3/css/settings.css") ?>">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="<?= build_url_plugins("revolution/v5.4.3/css/navigation.css") ?>">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-area"></div>
    <?= $header ?>
    <!--/ end header -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
                            <ul>
                                <?php foreach ($banners as $banner) : ?>
                                <li data-index="rs-<?= $banner->id ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <img src="<?= base_url($banner->file_path) ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>                                    
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div> <!-- /end of slider -->
        <?= $product_view ?>
        <?= $about_view ?>
    </div>
    <!--/end page content -->
    <?= $footer ?>
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script  src="<?= build_url_js("jquery.min.js") ?>"></script>
<!-- jquery.min js -->
<script src="<?= build_url_js("wow.js") ?>"></script>
<!-- wow.min js -->
<script  src="<?= build_url_js("bootstrap.min.js") ?>"></script>
<!-- bootstrap.min js -->
<script  src="<?= build_url_js("bootstrap-select.min.js") ?>"></script>
<!-- Form js -->
<script  src="<?= build_url_js("jquery.bootstrap-touchspin.js") ?>"></script>
<!-- Form js -->
<script  src="<?= build_url_js("magnific-popup.js") ?>"></script>
<!-- magnific-popup js -->
<script  src="<?= build_url_js("waypoints-min.js") ?>"></script>
<!-- waypoints js -->
<script  src="<?= build_url_js("counterup.min.js") ?>"></script>
<!-- counterup js -->
<script src="<?= build_url_js("imagesloaded.js") ?>"></script>
<!-- masonry  -->
<script src="<?= build_url_js("masonry-3.1.4.js") ?>"></script>
<!-- masonry  -->
<script src="<?= build_url_js("masonry.filter.js") ?>"></script>
<!-- masonry  -->
<script  src="<?= build_url_js("owl.carousel.js") ?>"></script>
<!-- OWL  Slider  -->

<script  src="<?= build_url_js("dz.carousel.min.js") ?>"></script>
<!-- sortcode fuctions  -->
<script  src="<?= build_url_js("dz.ajax.js") ?>"></script>
<!-- contact-us js -->
<!-- revolution JS FILES -->
<script src="<?= build_url_plugins("revolution/v5.4.3/js/jquery.themepunch.tools.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/jquery.themepunch.revolution.min.js") ?>"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.actions.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.carousel.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.kenburn.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.layeranimation.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.migration.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.parallax.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.video.min.js") ?>"></script>
<script src="<?= build_url_plugins("revolution/v5.4.3/js/extensions/revolution.extension.slideanims.min.js") ?>"></script>
<script  src="<?= build_url_js("rev.slider.js") ?>"></script>
<script src="<?= build_url_js("modernizr.custom.js") ?>"></script>
<script src="<?= build_url_js("jquery.hoverdir.js") ?>"></script>
<script  src="<?= build_url_js("custom.js") ?>"></script>
<!-- custom fuctions  -->
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();	
});	/*ready*/
</script>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6287824700250", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>
</html>