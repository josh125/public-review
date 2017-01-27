<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>


	<section class="title-page">
		<div class="container"><br><br>
			<div class="col-md-9 col-md-offset-3">
			<?php echo form_open('login');?>
				<div class="row">
					<div class="col-md-8">
					<?php if($this->session->flashdata('error')):?>
                        <div class="alert alert-dismissible alert-info">
							<button type="button" class="close" data-dismiss="alert">x</button>
                        <h4 ><?php echo $this->session->flashdata('error');?></h4>
                        </div>
                        <br>
                    <?php endif;?>  
                    <?php if(validation_errors()):?>
                        <div class="alert alert-dismissible alert-info">
							<button type="button" class="close" data-dismiss="alert">x</button>
                        <h4 ><?php echo validation_errors();?></h4>
                        </div>
                        <br>
                    <?php endif;?>  
						<div class="panel panel-info">
							<div class="panel-heading">
							<h3 class="panel-title">Sign In</h3><p><a href="<?php echo base_url();?>login/reset_password" class="pull-right">Forgot Password?</a></p>
							</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user fa-3x"></i></span>
												<input type="email" name="email" placeholder="Email" class="form-control user-input" required>
											</div>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-key fa-3x"></i></span>
												<input type="password" name="password"  placeholder="Password" class="form-control user-input" required>
											</div>
										</div>
									</div>
									<div class="row"><br>
										<div class="col-md-10 col-md-offset-1">
											<div class="checkbox">
												<label>
												<input type="checkbox" value="good">Remember Me
												</label>
											</div><br>
											<p><button type="submit" class="btn btn-success">Login</button> <button type="button" class="btn btn-primary">Login with Facebook</button></p>
											
										</div>
									</div>
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