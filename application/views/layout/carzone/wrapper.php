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
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <!--
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Blog single on sidebar</h1>
                </div>
            </div>
            -->
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Blog single on sidebar</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <?= $content ?>
            </div>
        </div>
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