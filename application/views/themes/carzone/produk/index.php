<!-- inner page banner -->
<?php 
$background_uri = base_url('assets/images/background/bg9.jpg');
?>
<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('<?= $background_uri ?>')">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Mobil Bekas dan Baru</h1>
        </div>
    </div>
</div>
<!-- inner page banner END -->
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Cari Mobil</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<div class="section-full p-t50 bg-white content-inner-2 compare-car">
    <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="icon-bx-wraper bx-style-1 p-a20 m-b30">
                        <form class="row" method="get" action="<?= base_url('produk/do_search') ?>">
                            <h4 class="col-lg-12">Cari Mobil Apa ?</h4>	
                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20">
                            <?= form_dropdown('cat_id', $cat_choices, 
                                isset($id_kategori_produk) ? $id_kategori_produk : NULL, 
                                "class='form-control'") ?>
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20">
                                <input type="number" name="price_from" class="form-control" placeholder="Dari harga"/>
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20">
                                <input type="number" name="price_to" class="form-control" placeholder="Ke harga"/>
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-12">
                                <button class="site-button btn-block">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>  <!--/end form search -->              
            </div>
            <?php 
            $row = 1;
            echo "<row>";
            foreach($produk as $produk) : 
            ?>			
            <div class="col-md-4 col-lg-3 col-md-4 col-sm-4">
                <div class="dlab-feed-list m-b30 text-left">
                    <div class="dlab-media" style="width: 293px; height: 181px;"> 
                        <a href="<?= base_url('produk/read/'.$produk->slug_produk) ?>">
                            <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" 
                            alt="" width="750" height="463">
                        </a> 
                    </div>
                    <div class="dlab-info text-left" style="width: 283px; height: 124px;">
                        <h4 class="dlab-title"><a href="<?= base_url('produk/read/'.$produk->slug_produk) ?>"><?php echo $produk->nama_produk ?></a></h4>
                        <p class="dlab-price"><span class="text-black"><?= format_rupiah($produk->harga) ?></span></p>
                    </div>
                    <div class="icon-box-btn text-center">
                        <ul class="clearfix">
                            <li><?= $produk->tahun ?></li>
                            <li><?= $produk->transmisi ?></li>
                            <li><?= $produk->kapasitas_mesin ?>cc</li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php 
            $row++;
            if ($row > 3) {
                echo "</row>";
                echo "<row>";
            }
            endforeach; 
            echo "</row>";
            ?>            
            <div class="row">
            </div>
    </div>
</div>