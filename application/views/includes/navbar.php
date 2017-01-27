	<div class="header-top">
		<div id="header-nav-top" class="navbar navbar-default">
			<div class="container">
					<div class="col-sm-5 col-md-3">
						<p class="hidden-xs">Read Reviews by the Public for the Public<p>
					</div>
					<div class="col-sm-3 col-md-3 hidden-xs"><!-- social icons -->
						<div class="fb-icon">
							<a href="https://www.facebook.com/PublicReviewInc/?ref=hl" target="_blank"><img src="<?php echo base_url();?>assets/img/home/fb.png" class="img-responsive" alt="facebook-icon" width="25px"></a>
						</div>	
						<div class="twitter-icon">
							<a href="#"><img src="<?php echo base_url();?>assets/img/home/twitter.png" class="img-responsive" alt="facebook-icon" width="25px"></a>
						</div>
						<div class="google-icon">
							<a href="#"><img src="<?php echo base_url();?>assets/img/home/google.png" class="img-responsive" alt="facebook-icon" width="25px"></a>
						</div>					
					</div><!-- end of social-icons -->

					<?php if($this->session->userdata('id')):?>
					<div class="col-xs-12 col-md-3 col-md-offset-3">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome! <?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname');?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">My Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li><a href="#">Help</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="<?php echo base_url();?>login/logout">Logout</a></li>
							</ul>
						</li>        
					</div>
					<?php else:?>
						<div class="col-xs-12 col-md-3 col-md-offset-3">
	 						<p class="sign-in"><a href="<?php echo base_url();?>signup">Create an Account</a> or <a href="<?php echo base_url();?>login" class="btn btn-primary btn-xs sign-button">Sign In</a></p>	
						</div>
					<?php endif;?>
			</div>
		</div>	
	</div>
	<header >
		<nav id="nav-top" class="navbar navbar-default" role="navigation">
				<div class="container">
				<div class="navbar-header nav-inner">
				    <button type="button" class="navbar-toggle collapsed navbar-tog" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar tog-icon"></span>
				        <span class="icon-bar tog-icon"></span>
				        <span class="icon-bar tog-icon"></span>
						</button>
					<a class="navbar-brand logo-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/home/logo.png" alt="Logo" width="180px;" /></a>
				</div>
				<form action="<?php echo base_url();?>writeareview/sample_search_design" method="get">
				<div id="search-bar">
					<div class="col-sm-3 col-md-4 hidden-xs">
						<div class="search-bar-find">
							<input type="text" class="form-control" name="find" placeholder="Find">
						</div>
					</div>
					<div class="col-sm-3 col-md-4 hidden-xs">
						<div class="search-bar-city">
							<input type="text" class="form-control" name="location" placeholder="Location">
						</div>
					</div>
					<button type="submit" class="btn btn-primary hidden-xs"><i class="fa fa-search"></i></button>
				</div>
				</form>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav menu-bar">
						<li><a href="<?php echo base_url();?>"><strong>Home</strong></a></li>
						<li><a href="<?php echo base_url();?>writeareview"><strong>Write A Review</strong></a></li>
						<li><a href="<?php echo base_url();?>contact_us"><strong>Contact Us</strong></a></li>
						<li><a href="<?php echo base_url();?>dispute"><strong>Dispute</strong></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>