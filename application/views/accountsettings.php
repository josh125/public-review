<?php $this->load->view('includes/header');?>
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo base_url();?>home"><img class="img-responsive home-logo" width="150" height="150" src="images/home/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url();?>home">Home</a>
                    </li>
                    <li><a href="<?php echo base_url();?>about">About</a>
                    </li>
                    <li><a href="<?php echo base_url();?>writeareview">Find a review</a>
                    </li>
                    <li><a href="<?php echo base_url();?>contact_us">Contact us</a></li>
			        <li>
                    <?php if($this->session->userdata('id')):?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="navbar-login-color"><?php echo  $this->session->userdata('username');?> <b class="caret"></b></p></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>profile">My Profile</a></li>
                        <li><a href="<?php echo base_url();?>accountsettings">Account Settings</a></li>
                        <li><a href="#">Help</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>login/logout">Log out</a></li>
                      </ul>
                    </li>
                    <?php else:?>
                    <a href="<?php echo base_url();?>login"><p class="navbar-login-color"> Log in</p></a>
                    <?php endif;?> 
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br><br><br><br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<center><a href="<?php echo base_url();?>termsandservice"><h1 class="accountsettings-h1">Terms and Service</h1></a></center>
							</div>
							<div class="col-md-9">
								 <h1 class="accountsettings-h1"><i class="fa fa-cogs fa-lg"></i> Account Settings</h1><br><hr>
							 	<div class="panel-heading accountsettings-hover">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#place">
											<div class="row">
										 		<div class="col-md-2">
										 			<p class="accountsettings-p">Name</p>
										 		</div>
										 		<div class="col-md-3">
										 			<p>Jenny Smith</p>
										 		</div>
										 		<div class="col-md-5"></div>
										 		<div class="col-md-2">
										 			<p class="accountsettings-edit"><i class="fa fa-pencil"></i> Edit</p>
										 		</div>	
									 		</div>
										</a>
									</h4>
								</div>
							 	<div id="place" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
										        <div class="panel panel-default accountsettings">
										            <div class="panel-heading form-horizontal payment-form">
										                <div class="form-group">
										                    <label for="concept" class="col-sm-2 control-label">First Name</label>
										                    <div class="col-sm-4">
										                        <input type="text" class="form-control" id="concept" name="FirstName" value="Jenny">
										                    </div>
										                </div>
										                <div class="form-group">
										                    <label for="description" class="col-sm-2 control-label">Last Name</label>
										                    <div class="col-sm-4">
										                        <input type="text" class="form-control" id="description" name="LastName" value="Smith">
										                    </div>
										                </div> 
										                <div class="row">
										                	<div class="col-md-2">
										                		
										                	</div>
										                	<div class="col-md-3">
										                		<center><button type="button" class="btn btn-warning accountsettings-buttonsave"> Save</button></center>
										                	</div>
										                </div>
										            </div>
										        </div>
											</div>
										</div>
									</div>
								</div><hr class="accountsettings-hr">
								<div class="panel-heading accountsettings-hover">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#email">
											<div class="row">
										 		<div class="col-md-2">
										 			<p class="accountsettings-p">Email</p>
										 		</div>
										 		<div class="col-md-3">
										 			<p>jenny.smith@gmail.com</p>
										 		</div>
										 		<div class="col-md-5"></div>
										 		<div class="col-md-2">
										 			<p class="accountsettings-edit"><i class="fa fa-pencil"></i> Edit</p>
										 		</div>	
									 		</div>
										</a>
									</h4>
								</div>
							 	<div id="email" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
										        <div class="panel panel-default accountsettings">
										            <div class="panel-heading form-horizontal payment-form">
										                <div class="form-group">
										                    <label for="description" class="col-sm-2 control-label">Email</label>
										                    <div class="col-sm-5">
										                        <input type="text" class="form-control" id="description" name="Email" value="jenny.smith@gmail.com">
										                    </div>
										                </div>
										                <div class="row">
										                	<div class="col-md-2">
										                		
										                	</div>
										                	<div class="col-md-3">
										                		<center><button type="button" class="btn btn-warning accountsettings-buttonsave"> Save</button></center>
										                	</div>
										                </div>
										            </div>
										        </div>
											</div>
										</div>
									</div>
								</div><hr class="accountsettings-hr">
								<div class="panel-heading accountsettings-hover">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#password">
											<div class="row">
										 		<div class="col-md-2">
										 			<p class="accountsettings-p">Password</p>
										 		</div>
										 		<div class="col-md-5">
										 			<p>Password last change 2weeks ago.</p>
										 		</div>
										 		<div class="col-md-3"></div>
										 		<div class="col-md-2">
										 			<p class="accountsettings-edit"><i class="fa fa-pencil"></i> Edit</p>
										 		</div>	
									 		</div>
										</a>
									</h4>
								</div>
							 	<div id="password" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
										        <div class="panel panel-default accountsettings">
										            <div class="panel-heading form-horizontal payment-form">
										                <div class="form-group">
										                    <label for="description" class="col-sm-2 control-label">Current</label>
										                    <div class="col-sm-4">
										                        <input type="text" class="form-control" id="description">
										                    </div>
										                </div>
										                <div class="form-group">
										                    <label for="description" class="col-sm-2 control-label">New</label>
										                    <div class="col-sm-4">
										                        <input type="text" class="form-control" id="description">
										                    </div>
										                </div>
										                <div class="form-group">
										                    <label for="description" class="col-sm-2 control-label">Re-type New</label>
										                    <div class="col-sm-4">
										                        <input type="text" class="form-control" id="description">
										                    </div>
										                </div>
										                <div class="row">
										                	<div class="col-md-2">
										                		
										                	</div>
										                	<div class="col-md-3">
										                		<center><button type="button" class="btn btn-warning accountsettings-buttonsave"> Save</button></center>
										                	</div>
										                </div>
										            </div>
										        </div>
											</div>
										</div>
									</div>
								</div><hr class="accountsettings-hr">
								<div class="panel-heading accountsettings-hover">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#location">
											<div class="row">
										 		<div class="col-md-2">
										 			<p class="accountsettings-p">Location</p>
										 		</div>
										 		<div class="col-md-5">
										 			<p>Add, Edit or remove your saved location.</p>
										 		</div>
										 		<div class="col-md-3"></div>
										 		<div class="col-md-2">
										 			<p class="accountsettings-edit"><i class="fa fa-pencil"></i> Edit</p>
										 		</div>	
									 		</div>
										</a>
									</h4>
								</div>
							 	<div id="location" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
										        <div class="panel panel-default accountsettings">
										            <div class="panel-heading form-horizontal payment-form">
										               	<div class="row">
										               		<div class="col-md-7">
										               			<b>Location Name</b>
									               			  	<input type="text" class="form-control" id="description"> 
										               		</div>
										               	</div><br>
								                 		<div class="row">
								                 			<div class="col-md-7">
							                 					<b>Address, City, Prov. or Postal Code</b>
							                        			<input type="text" class="form-control" id="description">
								                 			</div>
								                 		</div><br>
								                 		<div class="row">
										                	<div class="col-md-2">
										                		
										                	</div>
										                	<div class="col-md-3">
										                		<center><button type="button" class="btn btn-warning accountsettings-buttonsave"> Save</button></center>
										                	</div>
										                </div>
									                </div>
									            </div>
									        </div>
										</div>
									</div>
								</div>
								<hr class="accountsettings-hr">
								<div class="panel-heading accountsettings-hover">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#birthday">
											<div class="row">
										 		<div class="col-md-2">
										 			<p class="accountsettings-p">Birthday</p>
										 		</div>
										 		<div class="col-md-5">
										 			<p>January 15, 1992</p>
										 		</div>
										 		<div class="col-md-3"></div>
										 		<div class="col-md-2">
										 			<p class="accountsettings-edit"><i class="fa fa-pencil"></i> Edit</p>
										 		</div>	
									 		</div>
										</a>
									</h4>
								</div>
							 	<div id="birthday" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
										        <div class="panel panel-default accountsettings">
										            <div class="panel-heading form-horizontal payment-form">
										               <div class="form-group">
										                    <label for="description" class="col-sm-2 control-label">Birth Date</label>
										                    <div class="col-sm-3">
										                        <select class="form-control">
							                                        <option value="0" selected>January</option>
							                                        <option value="1">February</option>
							                                        <option value="2">March</option>
							                                        <option value="3">April</option>
							                                        <option value="4">May</option>
							                                        <option value="4">June</option>
							                                        <option value="4">July</option>
							                                        <option value="4">August</option>
							                                        <option value="4">September</option>
							                                        <option value="4">October</option>
							                                        <option value="4">November</option>
							                                        <option value="4">December</option>
							                                    </select>
										                    </div>
										                     <div class="col-sm-2">
										                        <input type="text" class="form-control" id="description" placeholder="day" value="15">
										                    </div>
										                     <div class="col-sm-2">
										                        <input type="text" class="form-control" id="description" placeholder="year" value="1992">
										                    </div>
										                </div>
								                 		<div class="row">
										                	<div class="col-md-2">
										                		
										                	</div>
										                	<div class="col-md-3">
										                		<center><button type="button" class="btn btn-warning accountsettings-buttonsave"> Save</button></center>
										                	</div>
										                </div>
									                </div>
									            </div>
									        </div>
										</div>
									</div>
								</div>
								<hr class="accountsettings-hr">
								<div class="panel-heading accountsettings-hover">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#language">
											<div class="row">
										 		<div class="col-md-2">
										 			<p class="accountsettings-p">Language</p>
										 		</div>
										 		<div class="col-md-5">
										 			<p>English (US)</p>
										 		</div>
										 		<div class="col-md-3"></div>
										 		<div class="col-md-2">
										 			<p class="accountsettings-edit"><i class="fa fa-pencil"></i> Edit</p>
										 		</div>	
									 		</div>
										</a>
									</h4>
								</div>
							 	<div id="language" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
										        <div class="panel panel-default accountsettings">
										            <div class="panel-heading form-horizontal payment-form">
										                <div class="form-group">
										                    <label for="description" class="col-sm-3 control-label">Choose Primary</label>
										                    <div class="col-sm-5">
								                                    <select class="form-control">
								                                        <option value="0" selected>English (US)</option>
								                                        <option value="1">Afrikaans</option>
								                                        <option value="2">Bahasa Indonesia</option>
								                                        <option value="3">English (Pirate)</option>
								                                        <option value="4">English (UK)</option>
								                                    </select>
										                    </div>
										                </div>
								                 		<div class="row">
										                	<div class="col-md-2">
										                		
										                	</div>
										                	<div class="col-md-3">
										                		<center><button type="button" class="btn btn-warning accountsettings-buttonsave"> Save</button></center>
										                	</div>
										                </div>
									                </div>
									            </div>
									        </div>
										</div>
									</div>
								</div>
								<hr class="accountsettings-hr">
								<div class="panel-heading accountsettings-hover">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#gender">
											<div class="row">
										 		<div class="col-md-2">
										 			<p class="accountsettings-p">Gender</p>
										 		</div>
										 		<div class="col-md-5">
										 			<p>Female</p>
										 		</div>
										 		<div class="col-md-3"></div>
										 		<div class="col-md-2">
										 			<p class="accountsettings-edit"><i class="fa fa-pencil"></i> Edit</p>
										 		</div>	
									 		</div>
										</a>
									</h4>
								</div>
							 	<div id="gender" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
										        <div class="panel panel-default accountsettings">
										            <div class="panel-heading form-horizontal payment-form">
										                <div class="form-group">
										                    <label for="description" class="col-sm-3 control-label">Gender</label>
										                    <div class="col-sm-3">
							                                  <select class="form-control">
							                                        <option value="0" selected>Male</option>
							                                        <option value="1">Female</option>
							                                       
							                                    </select>  
										                    </div>
										                </div>
								                 		<div class="row">
										                	<div class="col-md-2">
										                		
										                	</div>
										                	<div class="col-md-3">
										                		<center><button type="button" class="btn btn-warning accountsettings-buttonsave"> Save</button></center>
										                	</div>
										                </div>
									                </div>
									            </div>
									        </div>
										</div>
									</div>
								</div>
							</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<br><br><br><br><br>
<?php $this->load->view('includes/footer-design');?>
<?php $this->load->view('includes/footer');?>