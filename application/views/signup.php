<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>


	<section class="title-page">
		<div class="container"><br><br>
			<div class="col-md-9 col-md-offset-3">
			<?php echo form_open('signup');?>
				<div class="row">
					<div class="col-md-8">
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
							<div class="panel-heading">
							<h3 class="panel-title">Sign Up</h3>
							</div><hr />

									<div class="row">
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user fa-3x"></i></span>
												<input type="text" name="fname" placeholder="Firstname" value="<?php echo set_value('fname')?>" class="form-control user-input">
											</div>
										</div>

										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user fa-3x"></i></span>
												<input type="text" name="lname" placeholder="LastName" value="<?php echo set_value('lname')?>" class="form-control user-input">
											</div>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-envelope fa-3x"></i></span>
												<input type="email" name="email" value="<?php echo set_value('email')?>" placeholder="Email" class="form-control user-input">
											</div>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock fa-3x"></i></span>
												<input type="password" name="password" value="<?php echo set_value('password')?>" placeholder="password" class="form-control user-input">
											</div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock fa-3x"></i></span>
												<input type="password" name="repass" value="<?php echo set_value('repass')?>" placeholder="re-password" class="form-control user-input">
											</div>
										</div>
									</div>
									<div class="row"><br>
										<div class="col-md-11 col-md-offset-1">
                     						<p class="login-p-noaccountyet"><small>By creating an account, you agree to Publicreview <a href="#"> Terms of Service</a> and <a href="#"> Privacy Policy</a>.</small></p>
											<p><button type="submit" class="btn btn-success btn-lg pull-right">Sign up</button></p> 
											
										</div>
									</div>
					</div>
				</div>
				<?php echo form_close();?>
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