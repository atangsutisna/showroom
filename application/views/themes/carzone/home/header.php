<header class="site-header header-transparent">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <!--<div class="dlab-topbar-left">
                    <ul>
                        <li><a href="on-road-price.html" >Get On Road Price</a></li>
                        <li><a href="page-faq.html" >Ask a Question</a></li>
                    </ul>
                </div>-->
                <div class="dlab-topbar-right topbar-social">
                    <ul>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-envelope-o"></i><?= $site_config->email ?></a>
                        </li>
                        <li><a href="<?= isset($site_config->facebook) ? $site_config->facebook : '#'?>" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= isset($site_config->twitter) ? $site_config->twitter : '#'?>" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?= isset($site_config->instagram) ? $site_config->instagram : '#'?>" class="site-button-link google-plus hover"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header -->
    <div class="sticky-header main-bar-wraper">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="index.html">
                        <img src="<?= base_url("assets/images/logo-light1.jpg") ?>" class="logo" alt="">
                    </a>
                </div>
                <!-- nav toggle button -->
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" > 
                    <i class="fa fa-bars"></i>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dlab-quik-search bg-primary ">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span id="quik-search-remove"><i class="fa fa-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse">	
                    <ul class="nav navbar-nav">
                        <li class="<?= set_active('home') ?> has-mega-menu demos"> <a href="<?= base_url() ?>">Home</a></li>
                        <li class="<?= set_active('produk') ?> has-mega-menu demos"> <a href="<?= base_url('produk') ?>">Katalog</a></li>
                        <li class="<?= set_active('berita') ?> has-mega-menu demos"> <a href="<?= base_url('berita') ?>">Blog</a></li>
                        <li class="<?= set_active('berita') ?> has-mega-menu demos"> <a href="<?= base_url('galery') ?>">Galery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>