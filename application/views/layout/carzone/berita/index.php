<!-- inner page banner -->
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
<!-- inner page banner END -->
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="<?= base_url()?>">Home</a></li>
            <li>Blog</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="row">
            <?php 
            $row = 1;
            foreach ($posts as $post) : 
            ?>
            <!-- blog grid -->
            <div id="masonry" class="dlab-blog-grid-2">
                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="blog-post blog-grid date-style-2">
                        <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                            <a href="#">
                                <img src="<?= base_url('assets/upload/image/'.$post->gambar) ?>" alt="">
                            </a> 
                        </div>
                        <div class="dlab-post-info">
                            <div class="dlab-post-title ">
                                <h3 class="post-title"><a href="<?= base_url('berita/read/'.$post->slug_berita) ?>"><?= $post->nama_berita ?></a></h3>
                            </div>
                            <div class="dlab-post-meta ">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i><?= post_date_format($post->tanggal_post, "d M Y") ?></li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#"><?= $post->author ?></a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-text">
                                <?= substr($post->keterangan, 0, 300) ?>
                            </div>
                            <div class="dlab-post-readmore"> <a href="<?= base_url('berita/read/'.$post->slug_berita) ?>" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            $row++;
            if ($row > 2) {
                echo "</div><div class=\"row\">";
            }
            endforeach; 
            ?>
        </div> <!--/end row -->  
    </div>
</div>