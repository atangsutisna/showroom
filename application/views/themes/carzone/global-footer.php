<!-- JavaScript  files ========================================= -->
<script  src="<?= build_url_js("jquery.min.js") ?>"></script>
<!-- wow.min js -->
<script src="<?= build_url_js("wow.js") ?>"></script>
<!-- jquery.min js -->
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

<script  src="<?= build_url_js("custom.js") ?>"></script>
<!-- custom fuctions  -->
<script  src="<?= build_url_js("dz.carousel.min.js") ?>"></script>
<!-- sortcode fuctions  -->
<script src="<?= build_url_plugins('imagegallery/js/lightgallery.js') ?>"></script>
<script src="<?= build_url_plugins('imagegallery/js/lg-thumbnail.js') ?>"></script>
<!-- lightgallery fuctions  -->
<script  src="js/custom.min.js"></script>
<!-- custom fuctions  -->
<script  src="js/dz.carousel.min.js"></script>
<!-- sortcode fuctions  -->
<script>
	lightGallery(document.getElementById('lightgallery')); 
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
