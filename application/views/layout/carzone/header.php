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
                            <a href="javascript:void(0);"><i class="fa fa-envelope-o"></i> support@mobilhondabandungjabar.com</a>
                        </li>
                        <li><a href="#" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
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
                    <a href="index.html"><img src="images/logo-light.png" class="logo" alt=""></a>
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
                        <li class="active has-mega-menu demos"> <a href="index.html">Home</a></li>
                        <li class="has-mega-menu demos"> <a href="index.html">Produk</a></li>
                        <li><a href="javascript:;">New<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <?php foreach($nav_berita as $nav_berita) : ?>
                                <li>
                                    <a href="<?= base_url('berita/kategori/'.$nav_berita->slug_kategori_berita) ?>">
                                        <?= $nav_berita->nama_kategori_berita ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="has-mega-menu demos"> <a href="index.html">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>