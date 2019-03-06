<!--gallery-->
<div class="gallery">		
<div class="container">
<h3 class="title"><?php echo $title ?></h3><br/>
<form method="get" action="<?= base_url('produk/do_search') ?>">
<div class="row">
    <div class="col-3 col-sm-3 col-lg-3">
        <div class="form-group">
            <label>kategori</label>
            <?= form_dropdown('cat_id', $cat_choices, 
                isset($id_kategori_produk) ? $id_kategori_produk : NULL, "class='form-control'") ?>
        </div>
    </div>
    <div class="col-3 col-sm-3 col-lg-3">
        <div class="form-group">
            <label>Harga Dari</label>
            <input type="number" name="price_from" class="form-control"/>
        </div>
    </div>
    <div class="col-3 col-sm-3 col-lg-3">
        <div class="form-group">
            <label>Harga Sampai</label>
            <input type="number" name="price_to" class="form-control"/>
        </div>
    </div>
    <div class="col-3 col-sm-3 col-lg-3">
        <div class="form-group" style="margin-top: 20px;">
            <input type="submit" value="Cari" class="btn btn-primary"/>
        </div>
    </div>
</div>
</form>
<div class="gallery-grids">	
    <?php foreach($produk as $produk) { ?>			
    <div class="col-md-4 port-grids view view-fourth">
        <a href="<?php echo base_url('produk/read/'.$produk->slug_produk) ?>" data-title="<?php echo $produk->nama_produk ?>">
            <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" class="img-responsive" alt="<?php echo $produk->nama_produk ?>"/>
            <div class="mask">
                <p><?php echo $produk->nama_produk ?><br/><?= format_rupiah($produk->harga) ?></p>
            </div>
        </a>
    </div>
    <?php } ?>
    <div class="clearfix"> </div>	
    <script src="<?php echo base_url() ?>assets/front/js/lightbox-plus-jquery.min.js"> </script>
</div>				
</div>
</div>	
<!--//gallery-->
<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/easing.js"></script>
    <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	

