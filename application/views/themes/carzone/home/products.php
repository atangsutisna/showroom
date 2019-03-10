<div class="section-full bg-white content-inner car-listing">
    <div class="container">
        <div class="section-head">
            <h3 class="h3 text-uppercase">Detail Produk</h3>
        </div>
        <div class="section-content ">
            <div class="row">	
                <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                    <?php foreach($produk as $produk) : ?>
                    <div class="item">
                        <div class="dlab-feed-list">
                            <div class="dlab-media" style="width: 293px; height: 181px;"> 
                                <a href="new-car-upcoming.html">
                                    <img src="<?= base_url('assets/upload/image/'.$produk->gambar) ?>" alt="">
                                </a> 
                            </div>
                            <div class="dlab-info" style="width: 293px; height: 167px;">
                                <h4 class="dlab-title">
                                    <a href="<?= site_url('produk/read/'.$produk->slug_produk)  ?>">
                                        <?= $produk->nama_produk ?>
                                    </a>
                                </h4>
                                <div class="dlab-separator bg-black"></div>
                                <p><span class="text-primary"><?= format_rupiah($produk->harga) ?></span></p>
                            </div>
                            <div class="icon-box-btn text-center">
                                <ul class="clearfix">
                                    <li>2017</li>
                                    <li>Manual</li>
                                    <li>210 hp </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>            
            </div>
        </div>
    </div>
</div>