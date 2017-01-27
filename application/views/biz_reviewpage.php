<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>
<section><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body" style="background:#FFFBEF;">
						<br>
						<?php foreach($biz as $r):?>
						<div class="row">
							<div class="col-md-7">
								<h1 class="reviewpage-h1"><?php echo $r->biz_name;?></h1>
								<div class="post-meta">
									<span>
										<i class="fa fa-star fa-lg"></i>
										<i class="fa fa-star fa-lg"></i>
										<i class="fa fa-star fa-lg"></i>
										<i class="fa fa-star fa-lg"></i>
										<i class="fa fa-star-half-o fa-lg"></i>
										<small class="reviewstar">31 reviews</small>
									</span><br>
									<a href=""><i class="fa fa-pencil"></i> Edit Info</a>
								</div>
								<p class="title-review">"Chocolate Shop"</p>
								<p>Small-batch chocolatier offering handmade candy bars & brownies, cocoa beans & educational classes. A rich and decadent frozen treat. topped with cocoa nib infused whipped cream.</p><br><br><br><br>
								<div class="row">
									<div class="col-md-4">
									<a href="images/home/recommend1.jpg" data-lightbox="nightwish1" data-title="My caption"><img class="img-responsive img-rounded reviewpage-image" src="<?php echo base_url();?>images/home/recommend1.jpg"></a>
									</div>
									<div class="col-md-4">
										<a href="images/home/recommend2.jpg" data-lightbox="nightwish1" data-title="My caption"><img class="img-responsive img-rounded reviewpage-image" src="<?php echo base_url();?>images/home/recommend2.jpg"></a>
									</div>
									<div class="col-md-4">
										<a href="#"><div class="cuadro_intro_hover ">
											<p style="text-align:center; margin-top:0px;">
												<img src="images/home/recommend3.jpg" class="img-responsive img-rounded" alt="">
											</p>
											<div class="caption">
												<div class="blur"></div>
												<div class="caption-text">
													<i class="fa fa-th fa-lg"></i>
													<h3 class="reviewpage-h3">See all 5 Photos</h3>
												</div>
											</div>
										</div></a>
									</div>
								</div>
							<?php endforeach;?>
							</div>
							<div class="col-md-5">
								<div class="panel panel-default">
									<div class="panel-body">
										<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15443.793439569683!2d121.00482714999998!3d14.6020176!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1434086085017" width="410" height="220" frameborder="0" style="border:0"></iframe><br><br>
										<a href="#"><i class="fa fa-location-arrow fa-lg"></i></a> 740 Valencia St, San Francisco, CA 94110, United States<br>
										<a href="#"><i class="fa fa-phone fa-lg"></i></a> +1 415-349-0942<br>
										<a href="#"><i class="fa fa-clock-o fa-lg"></i></a> <i>Open Today</i> <a href="#"> 10:00am - 9:00pm</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<button type="button" class="btn btn-danger reviewpage-writeareview"><i class="fa fa-star-o fa-lg"></i> Write a Review</button>
									</div>
									<div class="col-md-4">
										<button type="button" class="btn btn-info reviewpage-camera"><i class="fa fa-camera-retro fa-lg"></i> Add a Photo</button>
									</div>
									<div class="col-md-4">
										<button type="button" class="btn btn-info reviewpage-share"><i class="fa fa-mail-forward fa-lg"></i> Share</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
								<div class="row"><br>
									<div class="col-md-2">
										<a href="<?php echo base_url();?>profile"><img class="img-responsive img-circle img-thumbmail" src="images/home/gallery3.jpg"></a> 
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<a href="<?php echo base_url();?>profile"><strong>Jenny Smith</strong></a>
												<div class="post-meta">
													<span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</span>
												</div>
												<small class="profile-162"><i>1 day ago</i></small>
											</div>
											<div class="col-md-6">
											</div>
										</div>
										<p>Small batch chocolate. A little pricey but so worth it.
										The dulce de leche and salted caramels make me incredibly happy- TAY-STEE!
										Oh, and you can go on a free tour!</p>
									</div>
								</div><br><hr>
								<div class="row">
									<div class="col-md-2">
										<a href="<?php echo base_url();?>profile"><img class="img-responsive img-circle img-thumbmail" src="images/home/gallery1.jpg"></a> 
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<a href="<?php echo base_url();?>profile"><strong>Tania Saturday</strong></a>
												<div class="post-meta">
													<span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</span>
												</div>
												<small class="profile-162"><i>1 day ago</i></small>
											</div>
											<div class="col-md-6">
											</div>
										</div>
										<p>Their dulce de leche bar is LITERALLY the best thing that ever happened to me this week.<br>
										But I also got the spicy hot chocolate, which I wasn't so hot for. That flavor is way too overwhelming.</p>
										<div class="row">
											<div class="col-md-6">
												<a href="#"><img class="img-responsive img-rounded" src="images/home/dandelion.jpg"></a>
											</div>
											<div class="col-md-6">
												<a href="#"><img class="img-responsive img-rounded" src="images/home/dandelion-1.jpg"></a>
											</div>
										</div>
									</div>
								</div><br><hr>
								<div class="row">
									<div class="col-md-2">
										<a href="<?php echo base_url();?>profile"><img class="img-responsive img-circle img-thumbmail" src="images/home/gallery2.jpg"></a> 
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<a href="<?php echo base_url();?>profile"><strong>Brandon Smith</strong></a>
												<div class="post-meta">
													<span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</span>
												</div>
												<small class="profile-162"><i>1 day ago</i></small>
											</div>
											<div class="col-md-6">
											</div>
										</div>
										<p>I haven't eaten here enough to give it the 5 stars just yet. And the high prices are stopping me from going overboard.
										However, this is a really cool joint with some great chocolate options. We tried a few samples...liked one but not the other....and ordered a s'more tart. It was quite decadent and something I would order again. We also bought a bar of the salted caramel with hazelnut praline...YUM. I wish I had a box of those. But at $7 a pop, its hard to rationalize buying too many.
										The inside is trendy and seems like a cool place to hang out with friends over what I can only imagine is an incredible mocha. Hell, I would probably just embrace my inner child and get a hot cocoa with marshmallows. I plan to go back and do just that.</p>
									</div>
								</div><br><hr>
								<div class="row">
									<div class="col-md-2">
										<a href="<?php echo base_url();?>profile"><img class="img-responsive img-circle img-thumbmail" src="images/home/zia.jpg"></a> 
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<a href="<?php echo base_url();?>profile"><strong>Zia Quizon</strong></a>
												<div class="post-meta">
													<span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</span>
												</div>
												<small class="profile-162"><i>1 day ago</i></small>
											</div>
											<div class="col-md-6">
											</div>
										</div>
										<p>This place is so cute, I wanted to try everything! but i was already full so I only went for the drinks this time.<br><br>

										Cacao fruit smoothie - it tastes like a lychee smoothie refreshing and delicious!</p>
										<div class="row">
											<div class="col-md-8">
												<a href="#"><img class="img-responsive img-rounded reviewpage-imagecomment" width="290" height="10" src="images/home/dandelion-3.jpg"></a>
											</div>
											<div class="col-md-4">
												<a href="#"><img class="img-responsive img-rounded reviewpage-image-sm" src="images/home/dandelion-4.jpg"></a><br>
												<a href="#"><img class="img-responsive img-rounded reviewpage-image-sm" src="images/home/dandelion-5.jpg"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('includes/footer-design');?>
<?php $this->load->view('includes/footer');?>