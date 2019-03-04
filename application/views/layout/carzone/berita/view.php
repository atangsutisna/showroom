<!-- blog start -->
<div class="blog-post blog-single">
    <div class="dlab-post-title ">
        <h3 class="post-title"><a href="#"><?= $title ?></a></h3>
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