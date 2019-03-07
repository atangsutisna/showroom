<?php 
$background_uri = base_url('assets/images/background/bg5.jpg');
?>
<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('<?= $background_uri ?>')">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Berita Otomotif</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="<?= base_url('berita') ?>">Blog</a></li>
            <li><?= $post->nama_berita ?></li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<div class="section-full content-inner bg-white">
    <div class="container">
        <!-- blog start -->
        <div class="blog-post blog-single">
            <div class="dlab-post-title ">
                <h3 class="post-title"><a href="#"><?= $post->nama_berita ?></a></h3>
            </div>
            <div class="dlab-post-meta m-b20">
                <ul>
                    <li class="post-date"> <i class="fa fa-calendar"></i><?= post_date_format($post->tanggal_post) ?> </li>
                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#"><?= $post->author ?></a> </li>
                </ul>
            </div>
            <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                <a href="#">
                    <img src="<?= base_url('assets/upload/image/'.$post->gambar) ?>" alt="">
                </a> 
            </div>
            <div class="dlab-post-text">
                <?= $post->keterangan ?>
            </div>
        </div>
        <!-- blog END -->    
    </div>
</div>