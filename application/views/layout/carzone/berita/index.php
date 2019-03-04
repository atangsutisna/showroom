<div class="row">
    <!-- blog grid -->
    <div id="masonry" class="dlab-blog-grid-2">
        <?php foreach ($posts as $post) : ?>
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
                            <li class="post-date"> <i class="fa fa-calendar"></i><?= post_date_format($post->tanggal_post) ?></li>
                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#"><?= $post->author ?></a> </li>
                        </ul>
                    </div>
                    <div class="dlab-post-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                    
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>