<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>

<section>
	<div class="container">
		<div class="row"><br><br><br>
		<?php foreach($profile as $row):?>
				<div class="col-md-9"><br>
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="profile-text-h2">Welcome to Public Review, <?php echo $row->firstname;?></h2><br>
							<div class="row">
								<div class="col-md-3">
									
									<img class="img-responsive img-thumbnail" src="<?php echo base_url();?>images/primary.png">
									<center><a href="<?php echo base_url();?>accountsettings"><small>Update Profile</small></a></center>
									<button type="button" class="btn btn-primary profile-btn" data-toggle="modal" data-target="#myModal"> Write another Review</button>
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Write another Review</h4>
									      </div>
									     <?php endforeach;?> 
									      <div class="modal-body">
									        <div class="post-meta">
												<span>
													<i class="fa fa-star-o fa-lg"></i>
													<i class="fa fa-star-o fa-lg"></i>
													<i class="fa fa-star-o fa-lg"></i>
													<i class="fa fa-star-o fa-lg"></i>
													<i class="fa fa-star-o fa-lg"></i>
												</span>
											</div><br>
									      	<h3 class="profile-text-h3">Title of your Review</h3>
									      	<input type="text" class="form-control" placeholder="If you could say it in one sentence, what would you say?"><br>
								      		 <h3 class="profile-text-h3">Your Review</h3>
								      		 <textarea rows="8" type="text" class="form-control" placeholder="Write your Review.."></textarea>
								      		 <div class="status-upload1">
												<form>
													<ul>
														<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music" type="file" name="myfile"></i></a></li>
														<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
														<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
													</ul>
												</form>
											</div><!-- Status Upload  -->
									      </div>
									      <div class="modal-footer">
									      	<a href="#" class="btn btn-primary pull-right profile-submityourreview"> Submit your review</a>
									      </div>
									    </div>
									  </div>
									</div>
								</div>
								<div class="col-md-9">
									
									<p class="profile-p"><?php echo $row->address;?></p>
									<div class="post-meta">
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div>
									<a href="#" class="profile-recentlyreview">Arcadia</a><br>
									<div class="post-meta">
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div>
									<a href="#" class="profile-recentlyreview">Public Review</a><br>
									<div class="post-meta">
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</span>
									</div>
									<a href="#" class="profile-recentlyreview">Public Agent</a><br><br><br>
									<div role="tabpanel">

		<!-- Nav tabs -->
									  <ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">My Reviews</a></li>
									  </ul>

									  <!-- Tab panes -->
									  <div class="tab-content">
									    <div role="tabpanel" class="tab-pane active" id="wew">
												<?php foreach($reviews as $r):?>
											<div class="row"><br>
												<div class="col-md-2">
													<img class="img-responsive img-circle img-thumbmail" src="<?php echo base_url();?>images/primary.png">
												</div>
												<div class="col-md-9">
													<div class="row">
														<div class="col-md-6">
															<a href="#"><strong><?php echo trim($r['review_slug']);?></strong></a>
															<div class="post-meta">
																	<input id="input-5b" class="rating" value="<?php echo $r['rate'];?>" data-size="xs" data-disabled="true"><?php echo date("m/j/Y",strtotime($r['date']));?>
															</div>
														</div>
														<div class="col-md-6">
															<blockquote><small class="pull-right">4 days ago</small></blockquote>
														</div>
													</div><br>
													<p><?php echo $r['comment'];?></p>
													<a data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
													 <i class="fa fa-comment"></i> View 8 Comments
													</a>
													<div class="collapse" id="collapseExample1">
													  <div class="well"><br>
													    <div class="row">
															<div class="col-md-2">
																<a href="#"><img class="img-responsive img-circle img-thumbmail" style="margin-left:10px;" src="<?php echo base_url();?>images/primary.png"></a>
															</div>
															<div class="col-md-10">
																<div class="row">
																	<div class="col-md-6">
																		<a href="#"><strong>John D. Santos</strong></a>
																	</div>
																	<div class="col-md-5">
																		<blockquote><small class="pull-right">58 minutes ago</small></blockquote>
																	</div>
																</div>
																<p>Amazing little chocolate factory in the heart of mission. So many delicious forms of chocolate. :)</p>
															</div>
														</div><br>
														 <div class="row">
															<div class="col-md-2">
																<a href="#"><img class="img-responsive img-circle img-thumbmail" style="margin-left:10px;" src="images/home/product3.jpg"></a>
															</div>
															<div class="col-md-10">
																<div class="row">
																	<div class="col-md-6">
																		<a href="#"><strong>Jenny D. Delos Santos</strong></a>
																	</div>
																	<div class="col-md-5">
																		<blockquote><small class="pull-right">2 hours ago</small></blockquote>
																	</div>
																</div>
																<p>Wow. This was an amazing find!I tried their hot chocolate and it was amazing.</p>
															</div>
														</div><br>
														 <div class="row">
															<div class="col-md-2">
																<a href="#"><img class="img-responsive img-circle img-thumbmail" style="margin-left:10px;" src="images/home/gallery2.jpg"></a>
															</div>
															<div class="col-md-10">
																<div class="row">
																	<div class="col-md-6">
																		<a href="#"><strong>Johnny M Smith</strong></a>
																	</div>
																	<div class="col-md-5">
																		<blockquote><small class="pull-right">3 hours ago</small></blockquote>
																	</div>
																</div>
																<p>The balance between sugar and chocolate and the texture of the chocolate was superb.</p>
															</div>
														</div><br>
														<input type="text" class="form-control" placeholder="Write a comment">
													  </div>
													</div>
												</div>
											<?php endforeach;?>
											</div><br>
											
									    </div>
					
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"><br>
				<div class="panel panel-default">
					<div class="panel-body"><br>
						<h4 class="panel-title">What is Public Review Inc?</h4><br>
						<p>
							<b>Public Review</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p><br><hr>
						<h4 class="panel-title">Why Write a Review?</h4><br>
						<ul style="list-style-type:disc">
							<li><p>Lorem ipsum Dolor Sit Amet, consectetur</p></li>
							<li><p>Lorem ipsum dolor sit amet adipisicing elit</p></li>
							<li><p>Lorem ipsum dolor sit amet adipisicing elit</p></li>
							<li><p>Lorem ipsum dolor sit amet adipisicing elit</p></li>
						</ul>
					</div>
				</div>
				<div class="panel panel-default home3-3"><!-- ask a question -->
					<div class="panel-body">
						<h4 class="panel-title">
							<i class="glyphicon glyphicon-comment"></i>
							Ask a Question?
						</h4>
						<p class="home-p-sidebar">usually answered in minutes!</p>
					 	  <textarea name="message" id="message" required="required" class="form-control" rows="6" placeholder="Your Question Here"></textarea>
		                <a href="#"><input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit"></a>
					</div>
				</div>
				<div class="panel panel-default home3-3"><!-- Take a Poll -->
					<div class="panel-body">
						<h4 class="panel-title">
							<i class="glyphicon glyphicon-comment"></i>
							Take a Public Poll
						</h4>
						<p class="home-p-sidebar">usually answered in minutes!</p>
					 	  <textarea name="message" id="message" required="required" class="form-control" rows="6" placeholder="Your Question Here"></textarea>
		                <a href="#"><input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('includes/footer-design');?>
<?php $this->load->view('includes/footer');?>