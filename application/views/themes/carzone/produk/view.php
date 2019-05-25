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
<!--/end of breadcrumb -->
<div class="section-full p-t50 bg-white content-inner-2">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-md-8">
						<div class="m-b30">
							<h3 class="h3 m-t0"><?= $product->nama_produk ?></h3>
							<ul class="used-car-dl-info">
								<li><i class="fa fa-calendar"></i> Last update: <?= post_date_format($product->updated_at) ?></li>
								<li><i class="fa fa-eye"></i> 14 Views</li>
							</ul>
						</div>
						<div class="owl-fade-one owl-carousel owl-btn-center-lr">
							<div class="item">
								<div class="dlab-thum-bx"> 
									<img src="<?php echo base_url('assets/upload/image/'.$product->gambar) ?>" 
		    	                        alt="" width="617" height="370">
								</div>
							</div>
						</div>												
					</div>
                    <!-- Side bar END -->
					<div class="col-md-4">
						<div class="car-dl-info m-b30">
							<div class="price">
								<h2 class="m-t0 m-b5"><?= format_rupiah($product->harga) ?></h2>
								<span><?= $product->nama_produk ?></span>	
							</div>			
						</div>
						<div class="used-car-features clearfix m-b30">
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5><?= $product->tahun ?></h5>
								<span>Model</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-dashboard"></i>
								<h5><?= isset($product->odo_meter) ? $product->odo_meter : 0 ?> km</h5>
								<span>Driven</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-gas-station"></i>
								<h5><?= ucfirst($product->tipe_bahan_bakar) ?></h5>
								<span>BBM</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-mechanic"></i>
								<h5>Individual</h5>
								<span>Seller</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5><?= ucfirst($product->transmisi) ?></h5>
								<span>Transmisi</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-car-key"></i>
								<h5>First</h5>
								<span>Owner</span>	
							</div>
						</div>						
					</div>
                </div>
            </div>
        </div>