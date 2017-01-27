<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>

<section class="title-page">
	<div class="container">
		<div class="col-md-9 col-md-offset-3">
		<?php echo form_open('login/reset_password');?>
			<?php if($this->session->flashdata('error')):?>
            	<div class="alert alert-dismissible alert-info">
				<button type="button" class="close" data-dismiss="alert">x</button>
					<strong><?php echo $this->session->flashdata('error');?></strong>
				</div><br>
	        <?php endif;?>  
	        <?php if(validation_errors()):?>
                <div class="alert alert-dismissible alert-info">
					<button type="button" class="close" data-dismiss="alert">x</button>
                	<h4 ><?php echo validation_errors();?></h4>
                </div>
                <br>
        	<?php endif;?>  
			<h1>Forgot Password</h1>
			<p>Please enter your email address and we will send you link yo reset your password.</p>
			<div class="row">
				<div class="col-md-8">
					<input type="text" name="email" placeholder="Enter your Email" class="form-control">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<button type="submit" class="btn btn-primary pull-right">Reset Password</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</section>

<footer class="footer-background footer-reset">
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