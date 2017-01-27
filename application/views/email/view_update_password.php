<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>


	<section class="title-page">
		<div class="container">
			<div class="col-md-10 col-md-offset-2">
			<div class="row">
			 <?php if(validation_errors()):?>
                <div class="alert alert-dismissible alert-info">
					<button type="button" class="close" data-dismiss="alert">x</button>
                	<h4 ><?php echo validation_errors();?></h4>
                </div>
                <?php endif;?>  
				<div class="col-md-8">
					<div class="panel-heading">
						<h3 class="panel-title">Update your Password</h3>
					</div><hr />
					<?php echo form_open('login/update_password');?>
						<div class="row">
							<div class="col-md-12">
							<?php if(isset($email_hash, $email_code)):?>
								<input type="hidden" value="<?php echo $email_hash ?>" name="email_hash" />
								<input type="hidden" value="<?php echo $email_code ?>" name="email_code" />
								<input type="hidden" value="<?php echo $email ?>" name="email" />
							<?php endif;?>
								<!-- <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa-3x"></i></span>
									<input type="email" name="email" value="<?php echo (isset($email)) ? $email : ''?>" placeholder="Email" class="form-control user-input">
								</div> -->
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-3x"></i></span>
									<input type="password" name="password" placeholder="New Password" class="form-control user-input" required>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-3x"></i></span>
									<input type="password" name="repass" placeholder="Confirm New Password" class="form-control user-input" required>
								</div>
							</div>
						</div><br>
						<div class="row"><br>
							<div class="col-md-11 col-md-offset-1">
								<p><button type="submit" class="btn btn-success btn-lg pull-right">Update My Password</button></p> 
								
							</div>
						</div>
					<?php echo form_close();?>	
				</div>
			</div>
			</div>
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