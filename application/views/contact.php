<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>



	<section class="title-page">
		<div class="container" id="contact-page">
			<div class="row">
				<div class="col-sm-8 col-md-8">
					<h4 class="log-write-review">Contact Us</h4>
					<h6 class="contact-message">Message us here.</h6>
					<?php if($this->session->flashdata('message')):?>
						<div class="alert alert-dismissible alert-info">
						<button type="button" class="close" data-dismiss="alert">x</button>
							<strong><?php echo $this->session->flashdata('message');?></strong>
						</div>
					<?php endif;?>
				</div>
			</div>
				<?php echo form_open('contact_us/add_message');?>
			<div class="contact-form">
				<div class="row"><br />
						<div class="col-md-4">
							<div class="form-group">
							<label>Name</label>
								<input type="text" name="name" placeholder="Your Name" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label>Email</label>
								<input type="email" name="email" placeholder="your email" class="form-control" required>
							</div>
						</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<label>Subject</label>
						<input type="text" name="subject" class="form-control" placeholder="Subject" required>
					</div>
				</div>
			</div>
				<div class="row"><br />
					<div class="col-md-8">
						<div class="form-group">
						<label>Your Message</label>
							<textarea name="comment" class="form-control" rows="10" width="400px" height="206px" required></textarea>
						</div>
					</div>
				</div>
			<div class="col-md-8">
				<button type="submit" class="btn btn-primary pull-right">Submit</button>
			</div>

			<?php echo form_close();?>
		</div>
	</section>

	<footer class="footer-background footer-footer">
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