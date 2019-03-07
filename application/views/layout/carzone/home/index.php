<?php 
$background_uri = base_url('assets/images/background/home-bg.jpg');
?>
<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('<?= $background_uri ?>')">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Welcome To Our Website</h1>
        </div>
    </div>
</div>
<!-- About Us -->
<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="section-head text-center head-1">
            <h3 class="h3 text-uppercase">Car Dealership</h3>
            <div class="dlab-separator bg-gray-dark"></div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
        </div>
        
        <!-- Car Find And Sale -->
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="find-car box-hover ">
                    <div class="car-box">
                        <span class="text-primary">Are You Looking</span>
                        <h2 class="text-uppercase">To Buy A Car ?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the..</p>
                        <a href="new-car-search.html" class="site-button outline">
                            Search Your Car
                        </a> 
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="find-car box-hover active">
                    <div class="car-box">
                        <span class="text-primary">Are You Looking</span>
                        <h2 class="text-uppercase">To Buy A Car ?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the..</p>
                        <a href="new-car-search.html" class="site-button outline">
                            Search Your Car
                        </a> 
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="find-car box-hover" style="background-image: url(images/blog/default/thum3.jpg)">
                    <div class="car-box">
                        <span class="text-primary">Are You Looking</span>
                        <h2 class="text-uppercase">To Buy A Car ?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the..</p>
                        <a href="new-car-search.html" class="site-button outline">
                            Search Your Car
                        </a> 
                    </div>
                </div>
            </div>
		</div> <!-- Car Find And Sale END -->        
    </div> <!--/end container -->
</div> <!--/ end section about us -->
<!-- For Your Quick Look -->
<div class="section-full bg-white content-inner car-listing">
    <div class="container">
        <div class="section-head">
            <h3 class="h3 text-uppercase">For your quick look</h3>
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
                                    <a href="new-car-upcoming.html">
                                        <?= $produk->nama_produk ?>
                                    </a>
                                </h4>
                                <div class="dlab-separator bg-black"></div>
                                <p><span class="text-primary"><?= format_rupiah($produk->harga) ?></span></p>
                            </div>
                            <div class="icon-box-btn text-center">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>            
            </div>
        </div>
    </div>
</div>
<!-- For Your Quick Look END -->