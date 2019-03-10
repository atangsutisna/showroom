<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>   
    </div>
</div><hr />

<div class="row">
    <div class="col-md-4 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-newspaper-o"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= count($berita) ?></p>
                <p class="text-muted"><a href="<?= site_url('admin/berita') ?>">Berita</a></p>
            </div>
        </div>
    </div> <!--/end column berita -->
    <div class="col-md-4 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-book"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= count($produk) ?></p>
                <p class="text-muted"><a href="<?= site_url('admin/produk') ?>">Produk</a></p>
            </div>
        </div>
    </div> <!--/ end column product -->
    <div class="col-md-4 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-film"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= count($video) ?></p>
                <p class="text-muted"><a href="<?= site_url('admin/video') ?>">Video</a></p>
            </div>
        </div>
    </div> <!--/end colum video -->
    <div class="col-md-4 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-user"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= count($user) ?></p>
                <p class="text-muted"><a href="<?= site_url('admin/user') ?>">User</a></p>
            </div>
        </div>
    </div> <!--/ end column of user -->
    <div class="col-md-4 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-tags"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= count($kategori_berita) ?></p>
                <p class="text-muted"><a href="<?= site_url('admin/kategori_berita') ?>">Kategori Berita</a></p>
            </div>
        </div>
    </div> <!--/end column of kategori-berita -->
    <div class="col-md-4 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-dashboard"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= count($kategori_produk) ?></p>
                <p class="text-muted"><a href="<?= site_url('admin/kategori_produk') ?>">Kategori Produk</a></p>
            </div>
        </div>
    </div> <!--/end column of kategori-prouduct -->
</div>