<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>


	<section class="title-page">
		<div class="container">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
					<?php if($this->session->userdata('id')):?>
						<h4 class="log-write-review"><?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname');?>, Your next review awaits</h4>
					<?php else:?>
						<h4 class="log-write-review">You must Log in to write a review</h4>
					<?php endif;?>
						<h4 class="search-write-review">Search you want to review</h4>
					<p><?php $this->session->flashdata('error');?></p><br /> 
						<form action="<?php echo base_url();?>writeareview/sample_search_design" method="get">
							<div class="search-form">
								<div class="row">
									<div class="col-xs-12 col-sm-5 col-md-4 search-write">
										<div class="form-group">
											<input type="text" class="form-control" name="find" placeholder="find">
										</div>
									</div>
									<div class="col-xs-12 col-sm-5 col-md-4 search-write">
										<div class="form-group">
											<input type="text" class="form-control" name="location" placeholder="location">
										</div>
									</div>
									<div class="col-sm-2 hidden-xs">
										<button type="submit" class="btn btn-primary hidden-xs"><i class="fa fa-search"></i></button>
									</div>
									<div class="col-sm-12 col-xs-12 visible-xs">
										<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i></button>
									</div>
									<div id="write-banner">
									<div class="col-md-3 col-md-offset-3 hidden-xs hidden-sm">
										<img src="<?php echo base_url();?>assets/img/writeareview/image-arrow.png" alt="review_banner" class="img-responsive">
									</div>
								</div>
								</div>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</section>

	

<!-- 	<section class="title-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-8">
				<?php if($this->session->userdata('id')):?>
					<h4 class="log-write-review"><?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname');?>, Your next review awaits</h4>
				<?php else:?>
					<h4 class="log-write-review">You must Log in to write a review</h4>
				<?php endif;?>
					<h4 class="search-write-review">Search you want to review</h4>
				<p><?php $this->session->flashdata('error');?></p> 
				</div>
			</div><br />
			<form action="<?php echo base_url();?>writeareview/sample_search_design" method="get">
				<div class="search-form">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-3 search-write">
							<div class="form-group">
								<input type="text" class="form-control" name="find" placeholder="find">
							</div>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-3 search-write">
							<div class="form-group">
								<input type="text" class="form-control" name="location" placeholder="location">
							</div>
						</div>
						<div class="col-sm-2 hidden-xs">
							<button type="submit" class="btn btn-primary hidden-xs"><i class="fa fa-search"></i></button>
						</div>
						<div class="col-sm-12 col-xs-12 visible-xs">
							<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i></button>
						</div>
						<div id="write-banner">
						<div class="col-md-3 col-md-offset-3 hidden-xs hidden-sm">
							<img src="<?php echo base_url();?>assets/img/writeareview/image-arrow.png" alt="review_banner" class="img-responsive">
						</div>
					</div>
					</div>
				</div>
			</form>
		</div>
	</section> -->

	<div class="container" id="search_result">
		<div class="col-sm-12 col-md-7" id="main-result">
			<h3 class="search-write-review">See the Search you'd like to review?</h3><hr />  
			
				<?php foreach($results as $row):?>
			<div class="row search_results">   
				<div class="col-md-6 left_data">
				
					<img class="thumb" src="<?php echo base_url(); ?>assets/upload/<?php echo $row->category_img;?>" width="150px" alt="Sample image" />
					<div class="descp">  
						<p><?php echo $row->item_name;?></p> 
						<p><span class="blurred"><?php echo ucwords($row->category);?></span></p>
						<?php
						$id = $row->main_category_item_id;

						$encrypt_id = $this->encrypt->encode($id);
						$enc_id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypt_id);
						?>	
						
						<?php if($row->main_category_id == '6'):?>
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/hotel/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '7'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/resto/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '8'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/attraction/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '4'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/web/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '5'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/things/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '3'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/biz/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '1'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/people/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '9'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/movie/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '10'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/music/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '11'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/sports/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '12'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/gaming/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>	
						<?php elseif($row->main_category_id == '13'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/news/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php elseif($row->main_category_id == '14'):?>	
						<p class="write_review"><a class="has_hover" href="<?php echo base_url();?>writeareview/others/<?php echo $enc_id;?>"><img src="<?php echo base_url(); ?>assets/img/writeareview/write_review_transparent.png" alt="Write a Review" /></a></p>
						<?php endif;?>
					</div>  
					
					<div class="clear"></div> 
					
				</div> <!-- end col md 6 -->   

				<div class="col-md-6 right_data">   
					<p><?php echo $row->country;?></p>  
					<p><?php echo $row->address;?> <br /><?php echo $row->city;?> <br /><?php echo $row->phone_no;?></p>
				</div>
			</div> <hr />   
					<?php endforeach;?>   

						<center><?php echo $this->pagination->create_links(); ?></center>
					
			
		</div>  
		
		
		<div class="col-md-4 col-md-offset-1" id="right_result">  
			<div class="panel panel-default">
				<div class="panel-body"><br>
					
					<div class="top">
						<h6 class="panel-title"><strong>Not here? tell us what we're missing</strong></h6>
						<p>If the business you're looking for isn't here, add it!</p>   
						<a href="<?php echo base_url();?>writeareview/add_category" class="has_hover"><img src="<?php echo base_url(); ?>assets/img/writeareview/add_business_transparent.png" alt="Add a Business" /></a>
					</div>  
					
					<div class="bottom">  
						<p>Got search feedback? <a href="#">Help us improve.</a></p>
					</div>
				</div>  
			</div>  
		</div>
		
		</div> 

	</div><br><br>

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

</body>
</html>