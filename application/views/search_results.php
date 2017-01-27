<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>

	<section class="title-page">
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
	</section>

		<div class="container" id="search_result">
		<div class="col-md-7" id="main-result">
			<h3 class="search-write-review">See the Search you'd like to review?</h3><hr />  
			
			<div class="row search_results">   
				<div class="col-md-6 left_data">
				
					<div class="row search_results">   
						<div class="panel-heading">
							<h4 class="panel-title">
									<h4 class="writeareview-yournext">No Results Found: </h4>
									<p class="writeareview-nothere">Not here? Tell us what we're missing.</p>
								<p class="writeareview-iftheperson"> If the Search you're looking for isn't here,
								add it!</p>
							</h4>
						</div>
					</div>   
				</div> <!-- end col md 6 -->   

					
			</div> <hr />   
			
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