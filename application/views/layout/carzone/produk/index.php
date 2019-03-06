<!-- inner page banner -->
<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(assets/images/background/bg9.jpg);">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Compare Result</h1>
        </div>
    </div>
</div>
<!-- inner page banner END -->
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Compare Result</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<div class="section-full p-t50 bg-white content-inner-2 compare-car">
    <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="icon-bx-wraper bx-style-1 p-a20 m-b30">
                        <form class="row">
                            <h4 class="col-lg-12">Cari Mobil Apa ?</h4>	
                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20">
                                <select class="form-control">
                                    <option>-Select Brand-</option>
                                    <option>Maruti</option>
                                    <option>Hyundai</option>
                                    <option>Honda</option>
                                    <option>Toyota</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20">
                                <select class="form-control">
                                    <option>-Select Model-</option>
                                    <option>Creta</option>
                                    <option>Elantra</option>
                                    <option>EON</option>
                                    <option>Grand i10</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20">
                                <select class="form-control">
                                    <option>-Select Variant-</option>
                                    <option>Creta</option>
                                    <option>Elantra</option>
                                    <option>EON</option>
                                    <option>Grand i10</option>
                                </select>
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
                        <a href="car-details-overview.html">
                            <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" 
                            alt="" width="750" height="463">
                        </a> 
                    </div>
                    <div class="dlab-info text-left" style="width: 283px; height: 124px;">
                        <h4 class="dlab-title"><a href="car-details-overview.html"><?php echo $produk->nama_produk ?></a></h4>
                        <p class="dlab-price"><span class="text-black"><?= format_rupiah($produk->harga) ?></span></p>
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