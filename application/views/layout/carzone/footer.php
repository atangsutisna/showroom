<footer class="site-footer">
        <div class="footer-top">
             <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="<?= base_url("assets/templates/{$current_template}/images/logo-light.png") ?>" alt=""></div>
                            <p class="m-tb20"><strong>CarZone</strong> is simply dummy text of the print ing and in type setting industry. Lorem Ipsum has bee the industry's standard...</p>
                            
							<ul class="dlab-contact-info">
                                <li><i class="flaticon-placeholder"></i>Demo Address #8901 Marmora Road Chi Minh City, Vietnam</li>
                                <li><i class="flaticon-customer-service"></i>Phone : 0800-123456 (24/7 Support Line)</li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-4 col-sm-9 col-xs-9 footer-col-7">
                        <div class="widget recent-posts-entry">
                            <h4 class="m-b15 text-uppercase">recent posts </h4>
                            <div class="dlab-separator bg-primary"></div>
                            <div class="widget-post-bx">
                                <?php foreach ($recent_posts as $post) : ?>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> 
                                        <img src="<?= base_url('assets/upload/image/'.$post->gambar) ?>" alt="" width="200" height="143"> 
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h5><a href="blog-single.html"><?= $post->nama_berita ?></a></h5>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By Admin</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-xs-8 footer-col-5">
                        <div class="widget ">
                            <h4 class="m-b15 text-uppercase">Newsletter </h4>
                            <div class="dlab-separator bg-primary"></div>
                            <p class="m-tb20">Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
							<form class="dlab-subscribe-form">
								<div class="input-group m-b15">
									<input name="dzEmail" required="" class="form-control " type="email" placeholder="Enter Your Email">
								</div>
								<div class="input-group">
									<button name="submit" type="submit" value="Submit" class="site-button btn-block">
										SUBSCRIBE <i class="fa fa-angle-right font-18 m-l10"></i>
									</button>
								</div>
							</form>
                        </div>
                    </div>
                </div>
				<div class="clearfix">
					<ul class="full-social-icon clearfix">
						<li class="fb col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-facebook"></i> Share On Facebook </a>
						</li>
						<li class="tw col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-twitter"></i> Tweet About it </a>
						</li>
						<li class="gplus col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-google-plus"></i> Google Plus | 78+ </a>
						</li>
						<li class="linkd col-md-3 col-sm-6 col-xs-6 m-b30">
							<a href="#"><i class="fa fa-linkedin"></i> Linkedin | 21k </a>
						</li>
					</ul>
				</div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left"> © Copyright 2019 Developed By <span class="text-primary"> Mobilhondabandungjabar</span> </div>
                    <div class="col-md-6 col-sm-6 text-right "> 
						<a href="page-about.html"> About Us</a> | 
						<a href="page-privacy-policy.html"> Contact Us</a> | 
						<a href="page-about.html"> Privacy Policy</a> 
					</div>
                </div>
            </div>
        </div>
</footer>