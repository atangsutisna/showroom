<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <!-- Dasbor --> 
            <li><a href="<?= site_url('admin/home') ?>"><i class="fa fa-dashboard"></i> Dasbor</a></li>       
            <!-- Produk -->           
            <li>
                <a href="#"><i class="fa fa-book"></i> Mobil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/produk')?>">Data Mobil</a></li>
                    <li><a href="<?= site_url('admin/produk/do_reg?type=new_car')?>">Tambah Mobil</a></li>
                    <li><a href="<?= site_url('admin/kategori_produk')?>">Brand</a></li>
                </ul>
            </li> 
            <!-- Berita -->           
            <li>
                <a href="#"><i class="fa fa-newspaper-o"></i> Berita<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/berita')?>">Data Berita</a></li>
                    <li><a href="<?= site_url('admin/berita/new_form')?>">Tambah Berita</a></li>
                    <li><a href="<?= site_url('admin/kategori_berita')?>">Kategori Berita</a></li>
                </ul>
            </li> 
            <!-- Modul Video -->
            <li>
                <a href="#"><i class="fa fa-film"></i> Video<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/video')?>">Data Video</a></li>
                    <li><a href="<?= site_url('admin/video/new_form')?>">Tambah Video</a></li>
                </ul>
            </li> 
            <!-- Modul Galery -->
            <li>
                <a href="#"><i class="fa fa-film"></i> Gallery<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/galery')?>">Data Gallery</a></li>
                    <li><a href="<?= site_url('admin/galery/new_form')?>">Tambah Gallery</a></li>
                </ul>
            </li> 
            <!-- Modul Promotion -->
            <li>
                <a href="#"><i class="fa fa-film"></i> Promotion<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/banner')?>">Data Banner</a></li>
                    <li><a href="<?= site_url('admin/banner/new_form')?>">Tambah Banner</a></li>
                </ul>
            </li> 
            <!-- Modul User -->
            <li>
                <a href="#"><i class="fa fa-users"></i> User/Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/user')?>">Data User/Administrator</a></li>
                    <li><a href="<?= site_url('admin/user/new_form')?>">Tambah User/Admin</a></li>
                </ul>
            </li> 
            <!-- Modul Konfigurasi -->
            <li>
                <a href="#"><i class="fa fa-wrench"></i> Konfigurasi Website<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/site_config/general')?>">Konfigurasi Umum</a></li>
                    <!--
                    <li><a href="<? // site_url('admin/home/logo')?>">Ganti Logo</a></li>
                    <li><a href="<? // site_url('admin/home/icon')?>">Ganti Icon</a></li>
                    <li><a href="<? //site_url('admin/home/quote')?>">Quote</a></li>
                    -->
                </ul>
            </li>  
        </ul>
    </div>
</nav>