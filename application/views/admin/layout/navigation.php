<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <!-- Dasbor --> 
            <li><a href="<?= site_url('admin/home') ?>"><i class="fa fa-dashboard"></i> Dasbor</a></li>       
            <!-- Produk -->           
            <li>
                <a href="#"><i class="fa fa-book"></i> Produk<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/produk')?>">Data Produk</a></li>
                    <li><a href="<?= site_url('admin/produk/do_reg')?>">Tambah Produk</a></li>
                    <li><a href="<?= site_url('admin/kategori_produk')?>">Kategori Produk</a></li>
                </ul>
            </li> 
            <!-- Berita -->           
            <li>
                <a href="#"><i class="fa fa-newspaper-o"></i> Berita<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/berita')?>">Data Berita</a></li>
                    <li><a href="<?= site_url('admin/berita/tambah')?>">Tambah Berita</a></li>
                    <li><a href="<?= site_url('admin/kategori_berita')?>">Kategori Berita</a></li>
                </ul>
            </li> 
            <!-- Modul Video -->
            <li>
                <a href="#"><i class="fa fa-film"></i> Video<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/video')?>">Data Video</a></li>
                    <li><a href="<?= site_url('admin/video/tambah')?>">Tambah Video</a></li>
                </ul>
            </li> 
            <!-- Modul User -->
            <li>
                <a href="#"><i class="fa fa-users"></i> User/Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/user')?>">Data User/Administrator</a></li>
                    <li><a href="<?= site_url('admin/user/tambah')?>">Tambah User/Admin</a></li>
                </ul>
            </li> 
            <!-- Modul Konfigurasi -->
            <li>
                <a href="#"><i class="fa fa-wrench"></i> Konfigurasi Website<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= site_url('admin/home/konfigurasi')?>">Konfigurasi Umum</a></li>
                    <li><a href="<?= site_url('admin/home/logo')?>">Ganti Logo</a></li>
                    <li><a href="<?= site_url('admin/home/icon')?>">Ganti Icon</a></li>
                    <li><a href="<?= site_url('admin/home/quote')?>">Quote</a></li>
                </ul>
            </li>  
        </ul>
    </div>
</nav>