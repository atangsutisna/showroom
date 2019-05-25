<?php
$nav_produk	= $this->site_model->nav_produk();
$nav_berita	= $this->site_model->nav_berita();
$nav_profil	= $this->site_model->nav_profil();
?>
<!--navigation-->
<div class="top-nav">
<nav class="navbar navbar-default">
<div class="container">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
</button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
  <li class="hvr-bounce-to-bottom <?= set_active_menu('home') ?>"><a href="<?php echo base_url() ?>">Home</a></li>  
  <li class="hvr-bounce-to-bottom <?= set_active_menu('produk') ?>"><a href="<?php echo base_url('produk') ?>">Produk</a></li>    
  <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Berita<span class="caret"></span></a>
      <ul class="dropdown-menu">
      	<?php foreach($nav_berita as $nav_berita) { ?>
          <li><a class="hvr-bounce-to-bottom" href="<?php echo base_url('berita/kategori/'.$nav_berita->slug_kategori_berita) ?>"><?php echo $nav_berita->nama_kategori_berita ?></a></li>
        <?php } ?> 
      </ul>
  </li>	
  
  <li class="hvr-bounce-to-bottom <?= set_active_menu('contact') ?>"><a href="<?php echo base_url('contact') ?>">Contact Us</a></li>
</ul>	
<div class="clearfix"> </div>
</div>	
</nav>		
</div>	
<!--//navigation-->
