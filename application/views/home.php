<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>

	<section class="title-page">
		<div class="container">
					<?php if($this->session->flashdata('message')):?>
                    	<div class="alert alert-dismissible alert-info">
						<button type="button" class="close" data-dismiss="alert">x</button>
							<strong><?php echo $this->session->flashdata('message');?></strong>
						</div><br>
                    <?php endif;?>  
				<div class="col-md-9">
					<div class="row">
						<h1 class="h1-tags"></h1>
					<div class="row">
					</div>
						<div class="col-md-4">
							<div id="left_side_bar">
								<!-- <h3><a href="#" class="button"><i class="fa fa-comment"></i> WRITE A REVIEW</a></h3> -->
								<a href="<?php echo base_url();?>writeareview" type="button" id="btn-review" class="btn btn-default">Write A Review</a>
								<ul class="nav">
									<li role="presentation"><a href="#"><i class="fa fa-star fa-lg"></i> Popular Reviews</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-users fa-lg"></i> People</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-plane fa-lg"></i> Attraction</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-h-square fa-lg"></i> Hotels</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-cutlery fa-lg"></i> Restaurants</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-building-o fa-lg"></i> Business</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-globe fa-lg"></i> Website</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-sun-o fa-lg"></i> Things</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-video-camera fa-lg"></i> Movies</a></li>
									<li role="presentation"><a href="#"><i class="fa fa-headphones fa-lg"></i> Music</a></li>  
									<li role="presentation"><a href="#"><i class="fa fa-rocket fa-lg"></i> Sports</a></li>  
									<li role="presentation"><a href="#"> <i class="fa fa-gamepad fa-lg"></i> Gaming</a></li>  
									<li role="presentation"><a href="#"> <i class="fa fa-list-alt fa-lg"></i> News</a></li>  
								</ul>
							</div>
						</div><!-- end of col-md-4 -->

						<div class="col-md-8">
							<a href="<?php echo base_url();?>reviewpage"><h3>Dandelion Chocolate</h3></a>
							<div class="left" id="star_review">
							<img width="19px" src="<?php echo base_url();?>assets/img/home/Five-Stars1.png">
							<img width="19px" src="<?php echo base_url();?>assets/img/home/Five-Stars1.png">
							<img width="19px" src="<?php echo base_url();?>assets/img/home/Five-Stars1.png">
							<img width="19px" src="<?php echo base_url();?>assets/img/home/Five-Stars1.png">
							<img width="19px" src="<?php echo base_url();?>assets/img/home/Five-Stars1.png">
							</div> 
							<div class="right" id="time">  
								<p><i>One minute Ago</i></p>
							</div> 
							<div class="clear"></div>  
								<p id="choco_description">Small-batch chocolatier offering handmade candy bars & brownies, cocoa beans & educational classes. People go nuts for this place. And you can see why after eating here.</p>

							<div class="left" id="address_and_location">  
								<p><strong>Address:</strong> 740 Valencia St, San Francisco, CA 94110, United States<br> 
								<strong>Contact:</strong> +1 415-349-0942<br>
								<strong>Hours:</strong> Open today 10:00 am - 9:00 pm</p> 
							</div> 

							<div class="row">  
								<div class="col-sm-8" id="wrap_featured">   
								
									<div class="carousel slide" data-ride="carousel" id="featured">
								
										<div class="carousel-inner">  
											<div class="item active"><img width="600px" height="165px" src="assets/img/home/dandelion-1.jpg" alt="" /></div>  
											<div class="item"><img width="600px" height="165px" src="assets/img/home/dandelion-2.jpg"alt="" /></div>     
											<div class="item"><img width="600px" height="165px" src="assets/img/home/dandelion-5.jpg" alt="" /></div>
											
										</div> 
										
										<a class="left carousel-control" href="#featured" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
										<a class="right carousel-control" href="#featured" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>	
									</div>  
									
								</div>
							</div> 
						</div><!-- end of col-md-8 -->
					</div><!-- end of row -->

					<div class="row">
						<div class="col-md-12">
							<div class="adjust_indent" id="recent_activity">
								<h4>Recent Activity</h4>
								<?php foreach($review_item as $r):?>
								<div class="panel panel-default wrap_recents">
									<div class="panel-body panel-box">
										<div class="activities">
											<div class="row">
												<div class="col-md-2 hidden-xs hidden-sm">
													<img src="assets/img/home/primary.png" alt="primary_pic" class="img-responsive img-thumbnail">
												</div>
												<div class="col-md-10">
													<a href="<?php echo base_url();?>profile/<?php echo $r['user_id'];?>"><strong><?php echo ucwords($r['firstname']);?></strong></a> post for 
																		<?php if($r['main_category_id'] == '6'):?>
																		<a href="<?php echo base_url();?>reviews/hotel/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '7'):?>	
																		<a href="<?php echo base_url();?>reviews/resto/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '8'):?>	
																		<a href="<?php echo base_url();?>reviews/attraction/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '9'):?>	
																		<a href="<?php echo base_url();?>reviews/movie/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '10'):?>	
																		<a href="<?php echo base_url();?>reviews/music/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '11'):?>	
																		<a href="<?php echo base_url();?>reviews/sports/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '12'):?>	
																		<a href="<?php echo base_url();?>reviews/gaming/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '13'):?>	
																		<a href="<?php echo base_url();?>reviews/news/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '1'):?>	
																		<a href="<?php echo base_url();?>reviews/people/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '3'):?>	
																		<a href="<?php echo base_url();?>reviews/biz/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '4'):?>	
																		<a href="<?php echo base_url();?>reviews/web/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php elseif($r['main_category_id'] == '5'):?>	
																		<a href="<?php echo base_url();?>reviews/things/<?php echo $r['slug'];?>" class="category-title"><strong><?php echo ucwords($r['item_name']);?></strong></a>
																		<?php endif;?>
																		<br />

																		<?php 
																			$star_src = base_url() . "assets/img/home/Five-Stars1.png";
																			for($i = 0; $i < $r['review_rate']; $i++) {  
																				echo "<img src='{$star_src}' alt='Star Rating' width='19px' />&nbsp;";
																			}
																		?>
														
													<p class="review-date">Posted: <?php echo date("M. j, Y",strtotime($r['date_review']));?></p>

													<h4><b>"<?php echo ucwords($r['title_review']);?>"</b></h4>
													<div class="show-read-more">
														<p class="review-list"><?php echo  $r['review'];?>
													</div>
														

												
													</p><br />
													<!-- <p class="review-useful">Was this Review useful? <button type="button" class="btn btn-default btn-xs">Yes</button> <button type="button" class="btn btn-default btn-xs">No</button></p><br> -->
												</div>
												<div class="row">
													<div class="col-md-6 col-md-offset-2">
														<a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/home/comment5.png"></a>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-md-offset-2">
														<input type="text" class="form-control" name="" placeholder="Write a comment..">
													</div>
													<div class="col-md-4">
														<button type="submit" class="btn btn-primary">Post</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach;?>
										<div class="row">     
										
											<center><div class="col-sm-12" id="recent_activity_loading">  
												<img src="assets/img/ajax-loader_black.gif" alt="loading" />
											</div>
											
											<div class="col-sm-12" id="wrap_see_more_activity">  
												<a id="see_more_activity" href="#">See more activity</a>
											</div></center>
										</div>  
							</div><!-- end #recent_activity -->
						</div><!-- end of col-md-12 -->
					</div><!-- end of row -->
				</div><!-- end of col-md-9 --><br>

				<!--- Side Bar -->
				<div class="col-md-3">
					<div id="right-side-bar">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="panel-home-title"><strong>What is Public Review?</strong></div></p>
								<p>
									<b>Public Review</b> is the easy way to find, review and talk about what's greate and not so great - in your local area. it's about real people giving their honest and personal opinions on everthing from people, business, place, website and others.
								</p>
							</div>
						</div>	

						<div class="panel panel-default"><!-- ask a question -->
							<div class="panel-body">
								<h4 class="panel-home-title">
									<i class="glyphicon glyphicon-comment"></i>
									Ask the Public?
								</h4>
								<p class="home-p-sidebar">Usually answered by the Public in minutes!</p>
							 	  <textarea name="message" id="message" required="required" class="form-control" rows="6" placeholder="Your Question Here"></textarea><br>
				                <a href="#"><input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit"></a>
							</div>
						</div>
					</div><!-- end of right-side-bar -->

				</div><!-- end of col-md-3 -->
		</div><!-- end of container -->
	</section>

	<footer class="footer-background">
		<div class="container">
			<div class="row"><br />
				<div class="col-md-3">
					<img src="<?php echo base_url();?>assets/img/home/logo.png" alt="public-review-logo" width="132px">
				</div>
				<div id="footer-link">
					<div class="col-md-6">
	                	<p class="footer-inc"><a href="#" class="footer-color-bottom">Contact Us</a>  | <a href="#" class="footer-color-bottom">About PublicReview</a> | <a href="#" class="footer-color-bottom"> Legal </a> | <a href="#" class="footer-color-bottom">Security Policy</a> | <a href="#" class="footer-color-bottom">Privacy Policy</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<p class="footer-copyright">&copy; 2015 Public Review Inc. All right reserved</p>
				</div>	
			</div>
		</div>
	</footer>

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/my_script.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/public_script.js"></script>	
	
</body>
</html>