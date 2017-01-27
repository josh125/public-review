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
										<img src="<?php echo base_url();?>assets/img/writeareview/image2.png" alt="review_banner" class="img-responsive">
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

	<footer class="footer-background footer-write hidden-sm">
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
	<footer class="navbar navbar-fixed-bottom visible-sm footer-background">
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
</body>
</html>