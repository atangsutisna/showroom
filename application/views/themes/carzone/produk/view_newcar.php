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
                <h3>PRICE LIST</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>TIPE</th>
                            <th>PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SMT</td>
                            <td><?= format_rupiah(222500000) ?></td>
                        </tr>
                    </tbody>
                </table>
                <h3>SPESIFIKASI</h3>
                <div class="clearfix m-t30">
                    <ul class="nav theme-tabs m-b10">
                        <li class="active">
                            <a data-toggle="tab" aria-controls="economy"  href="#performa">
                                <i class="fa fa-cogs"></i>
                                Performa
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" aria-controls="presentation" href="#interior_and_exterior">
                                <i class="fa fa-car"></i>
                                Interior dan Exterior
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" aria-controls="features" href="#fitur_pengereman">
                                <i class="fa fa-tachometer"></i>
                                Fitur Pengereman
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
                                            <div class="rightview"><?= $product->kapasitas_mesin.' cc' ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Diameter x Langkah</div>
                                            <div class="rightview"><?= $product->diameter_langkah.' mm' ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Perbandingan Kompresi</div>
                                            <div class="rightview"><?= $product->perbandingan_kompresi ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Daya Maksimum</div>
                                            <div class="rightview"><?= $product->daya_maksimum.' rpm' ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Torsi Maksimum</div>
                                            <div class="rightview"><?= $product->torsi_maksimum.' rpm' ?></div>
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
                            <div id="interior_and_exterior"  class="tab-pane clearfix city-list">
                                <div class="icon-bx-wraper bx-style-1 p-a30">
                                    <ul class="table-dl clearfix">
                                        <li>
                                            <div class="leftview">Dimensi</div>
                                            <div class="rightview">
                                                    <?= is_not_null_and_empty($product->dimensi_type_1) ? $product->dimensi_type_1.' mm' : 'Belum diisi' ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Jarak Pijak Depan</div>
                                            <div class="rightview"><?= is_not_null_and_empty($product->jarak_pijak_depan) ? $product->jarak_pijak_depan.' mm' : 'Belum diisi' ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Jarak Pijak Belakang</div>
                                            <div class="rightview"><?= is_not_null_and_empty($product->jarak_pijak_belakang) ? $product->jarak_pijak_belakang.' mm' : 'Belum diisi' ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Jarak Sumbu Roda</div>
                                            <div class="rightview"><?= is_not_null_and_empty($product->jarak_sumbu_roda) ? $product->jarak_sumbu_roda.' mm' : 'Belum diisi' ?></div>
                                        </li>
                                        <li>
                                            <div class="leftview">Kapasitas Tangki</div>
                                            <div class="rightview"><?= is_not_null_and_empty($product->kapasitas_tangki) ? $product->kapasitas_tanki. ' mm' : 'Belum diisi' ?></div>
                                        </li>
                                    </ul>                                    
                                </div>
                            </div>
                            <div id="fitur_pengereman"  class="tab-pane clearfix city-list">
                                <div class="icon-bx-wraper bx-style-1 p-a30">
                                    <ul class="table-dl clearfix">
                                        <li>
                                            <div class="leftview">Rangka Body</div>
                                            <div class="rightview">
                                                <?= is_not_null_and_empty($product->rangka_body) ? $product->rangka_body : 'Belum diisi'?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Suspensi Depan</div>
                                            <div class="rightview">
                                                <?= is_not_null_and_empty($product->suspensi_depan) ? $product->suspensi_depan : 'Belum diisi'?>                                            
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Suspensi Belakang</div>
                                            <div class="rightview">
                                                <?= is_not_null_and_empty($product->suspensi_belakang) ? $product->suspensi_belakang : 'Belum diisi'?>                                                                                        
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Rem Depan</div>
                                            <div class="rightview">
                                                <?= is_not_null_and_empty($product->rem_depan) ? $product->rem_depan : 'Belum diisi'?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Rem Belakang</div>
                                            <div class="rightview">
                                                <?= is_not_null_and_empty($product->rem_belakang) ? $product->rem_belakang : 'Belum diisi'?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Sistem Pengereman</div>
                                            <div class="rightview">
                                                <?= is_not_null_and_empty($product->sistem_pengereman) ? $product->sistem_pengereman : 'Belum diisi'?>                                            
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leftview">Ukuran Ban</div>
                                            <div class="rightview">
                                                <?= is_not_null_and_empty($product->ukuran_ban) ? $product->ukuran_ban : 'Belum diisi'?>
                                            </div>
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
