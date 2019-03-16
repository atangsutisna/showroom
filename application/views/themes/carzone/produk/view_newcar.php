<?php 
$background_uri = base_url('assets/images/background/bg5.jpg');
?>
<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('<?= $background_uri ?>')">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white"><?= $product->nama_produk ?></h1>
        </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="<?= base_url('produk') ?>">Produk</a></li>
            <li><?= $product->nama_produk ?></li>
        </ul>
    </div>
</div>
<div class="section-full content-inner bg-white">
    <div class="container">
        <!-- blog start -->
        <div class="blog-post blog-single">
            <div class="dlab-post-title ">
                <h3 class="post-title"><a href="#"><?= $product->nama_produk ?></a></h3>
            </div>
            <div class="dlab-post-meta m-b20">
                <ul>
                    <li class="post-date"> <i class="fa fa-calendar"></i><?= post_date_format($product->tanggal_post) ?> </li>
                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Admin</a> </li>
                </ul>
            </div>
            <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                <a href="#">
                    <img src="<?= base_url('assets/upload/image/'.$product->gambar) ?>" alt="">
                </a> 
            </div>
            <div class="dlab-post-text">
                <h3>SPESIFIKASI</h3>
                <div class="clearfix m-t30">
                    <ul class="nav theme-tabs m-b10">
                        <li class="active">
                            <a data-toggle="tab" aria-controls="economy"  href="#performa">
                                <i class="fa fa-tachometer"></i>
                                Performa
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" aria-controls="presentation" href="#presentation">
                                <i class="fa fa-tachometer"></i>
                                presentation
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" aria-controls="features" href="#features">
                                <i class="fa fa-star"></i>
                                Features
                            </a>
                        </li>
                    </ul>    
                    <div class="dlab-tabs">
						<div class="tab-content">                
                            <div id="performa"  class="tab-pane active clearfix city-list">
                                <div class="icon-bx-wraper bx-style-1 p-a30">
                                    <ul class="table-dl clearfix">
                                        <li>
                                            <div class="leftview">Tipe Mesin</div>
                                            <div class="rightview"><?= $product->tipe_mesin ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Kapasitas</div>
                                            <div class="rightview"><?= $product->kapasitas_mesin ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Diameter x Langkah</div>
                                            <div class="rightview"><?= $product->diameter_langkah ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Perbandingan Kompresi</div>
                                            <div class="rightview"><?= $product->perbandingan_kompresi ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Daya Maksimum</div>
                                            <div class="rightview"><?= $product->daya_maksimum ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Torsi Maksimum</div>
                                            <div class="rightview"><?= $product->torsi_maksimum ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Sistem Bahan Bakar</div>
                                            <div class="rightview"><?= $product->sistem_bahan_bakar ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Sistem Transmisi</div>
                                            <div class="rightview"><?= $product->sistem_transmisi ?></div>
                                        </li>
                                    </ul>
                                </div> 
                            </div> <!-- /end of economy -->                       
                            <div id="presentation"  class="tab-pane clearfix city-list">
                                <div class="icon-bx-wraper bx-style-1 p-a30">
                                    <ul class="table-dl clearfix">
                                        <li>
                                            <div class="leftview">Engine</div>
                                            <div class="rightview">1989 cc </div>
                                        </li>
                                        <li>
                                            <div class="leftview">BHP</div>
                                            <div class="rightview">188</div>
                                        </li>
                                    </ul>                                    
                                </div>
                            </div>
                            <div id="features"  class="tab-pane clearfix city-list">
                                <div class="icon-bx-wraper bx-style-1 p-a30">
                                    <ul class="table-dl clearfix">
                                        <li>
                                            <div class="leftview">Cruise Control</div>
                                            <div class="rightview">Yes</div>
                                        </li>
                                        <li>
                                            <div class="leftview">Sun roof</div>
                                            <div class="rightview">No </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Seating Capacity</div>
                                            <div class="rightview">4</div>
                                        </li>
                                        <li>
                                            <div class="leftview">Boot Space</div>
                                            <div class="rightview">480 litres</div>
                                        </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog END -->    
    </div>
</div>
