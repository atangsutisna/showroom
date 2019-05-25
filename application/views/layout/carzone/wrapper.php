<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<head>
<?= $global_header ?>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <?= $header ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <?= $content ?>
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?= $footer ?>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<?= $global_footer ?>
</body>
</html>