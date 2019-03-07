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
            <li><a href="<?= base_url('berita') ?>">Blog</a></li>
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
							<h3 class="h3 m-t0">Hyundai EON LPG Magna Plus </h3>
							<ul class="used-car-dl-info">
								<li><i class="fa fa-map-marker"></i> UK London</li>
								<li><i class="fa fa-calendar"></i> Updated on Nov 11</li>
								<li><i class="fa fa-eye"></i> 14 Views</li>
							</ul>
						</div>
						<div class="owl-fade-one owl-carousel owl-btn-center-lr">
							<div class="item">
								<div class="dlab-thum-bx"> <img src="images/blog/default/thum1.jpg" alt=""> </div>
							</div>
							<div class="item">
								<div class="dlab-thum-bx"> <img src="images/blog/default/thum2.jpg" alt=""> </div>
							</div>
							<div class="item">
								<div class="dlab-thum-bx"> <img src="images/blog/default/thum3.jpg" alt=""> </div>
							</div>
							<div class="item">
								<div class="dlab-thum-bx"> <img src="images/blog/default/thum4.jpg" alt=""> </div>
							</div>
						</div>												
					</div>
                    <!-- Side bar END -->
					<div class="col-md-4">
						<div class="car-dl-info m-b30">
							<div class="price">
								<h2 class="m-t0 m-b5">Price $5890</h2>
								<span>Hyundai EON LPG Magna Plus</span>	
							</div>			
							<form>
								<p class="m-t0 m-b5">Ex-showroom Price</p>
								<div class="form-group">
									<select>
										<option>Mumbai</option>
										<option>Chandigarh </option>
										<option>Rajasthan</option>
									</select>
								</div>	
								<div class="clearfix">
									<button type="button" class="btn-primary site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">View On Road Price </button>
								</div>
							</form>
						</div>
						<div class="used-car-features clearfix m-b30">
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5>2017</h5>
								<span>Model</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-dashboard"></i>
								<h5>6,900 km</h5>
								<span>Driven</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-gas-station"></i>
								<h5>Diesel</h5>
								<span>Fuel</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-mechanic"></i>
								<h5>Individual</h5>
								<span>Seller</span>	
							</div>
							<div class="car-features">
								<i class="flaticon-calendar"></i>
								<h5>Automatic</h5>
								<span>Transmission</span>	
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