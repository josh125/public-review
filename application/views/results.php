<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>
<br><br><br><br>
<section>
	<div class="container">
		<div class="row">
			 <div class="col-sm-12">
			 	<div class="panel panel-default">
			 		<div class="panel-body">
			 		<?php if($this->session->userdata('id')):?>
			 			<h1 class="writeareview-yournext"><?php echo $this->session->userdata('username');?>, Your next review awaits</h1>
			 		<?php else:?>
			 			<h4 class="writeareview-yournext"> You must log in to write a review</h4>
			 		<?php endif;?>	
	 		 			<h4 class="writeareview-revieweverthing">Review everything you want..</h4>
	 		 			<div class="row">
 		 					<div class="category-tab"><!--category-tab-->
								<div class="col-md-12">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tshirt" data-toggle="tab">Review a Person</a></li>
										<li><a href="#blazers" data-toggle="tab">Review a Place</a></li>
										<li><a href="#sunglass" data-toggle="tab">Review a Business</a></li>
										<li><a href="#kids" data-toggle="tab">Review a Website</a></li>
										<li><a href="#poloshirt" data-toggle="tab">Review a thing</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade active in" id="tshirt" >
										<div class="col-md-3">
								 		 	 <form action="action_page.php">
												<input list="browsers" name="browser" placeholder="Choose or type country" class="form-control">
												<datalist id="browsers">
												  <option value="United States">
												  <option value="Canada">
												  <option value="United Kingdom">
												  <option value="Australia">
												  <option value="Italy">
												  <option value="Philippines">
												</datalist>
											</form>
								 		 </div>

								 		 <?php echo form_open('writeareview/search',array('method'=>'get'));?>
									 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="name" placeholder="Find a Person" required>
							 		 	</div>
							 		 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="place" placeholder="City">
							 		 	</div>
							 		 	<div class="col-md-1">
							 		 		 <button type="submit" id="writeareview-button" class="btn btn-danger"><i class="fa fa-search"></i></button>
							 		 	</div>
							 		 	<?php echo form_close();?>

																
							 		 	<div class="col-md-12">
							 		 		<div class="panel-heading">
												<h4 class="panel-title">
														<h4 class="writeareview-yournext">No Results Found: </h4>
														<p class="writeareview-nothere">Not here? Tell us what we're missing. <i>Add a Person</i></p>
													<p class="writeareview-iftheperson"> If the Person you're looking for isn't here,
													add it!</p>
												</h4>
											</div>
											<?php echo form_open('writeareview/add');?>
											<div class="col-md-12">
													<div class="panel-body">
														<div class="row">
															 <div class="col-md-5">
															 	<div class="form-group">
								                                    <label for="filter">Country</label>
								                                    <select required name="country"class="form-control" >
								                                        <option value="" selected>----</option>
								                                        <option value="Austria">Austria</option>
								                                        <option value="United States">United States</option>
								                                        <option value="Canada">Canada</option>
								                                        <option value="Japan">Japan</option>
								                                        <option value="Philippines">Philippines</option>
								                                    </select>
							                                  	</div>
							                                  	<input type="hidden" name="categ_id" value="1">

															 	<div class="form-group">
							                                    	<label for="contain">Person Name</label>
								                                    <input class="form-control" type="text" name="person_name" value="<?php echo set_value('person_name')?>" placeholder="Public Review. Inc" required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">City, He/She lives in</label>
								                                    <input class="form-control" name="city" value="<?php echo set_value('city')?>" type="text" required/>
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Phone Number</label>
								                                    <input class="form-control" type="text" name="phone" value="<?php echo set_value('phone')?>" placeholder="(11) 2222-2222" required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Profession</label>
								                                    <input class="form-control" type="text" name="prof" value="<?php echo set_value('prof')?>" placeholder="ex. artist, doctor, teacher etc." required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Website Address</label>
								                                    <input class="form-control" type="text" name="website" value="<?php echo set_value('website')?>" placeholder="publicreview.com" />
							                                  	</div>
													 		</div>
															 <div class="col-md-2">
															 </div>
															 <div class="col-md-5"><br>
															 	<div class="panel panel-default">
															 		<div class="panel-heading">
															 			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15443.793439569683!2d121.00482714999998!3d14.6020176!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1434086085017" width="390" height="340" frameborder="0" style="border:0"></iframe>
															 		</div>
															 	</div>
															 </div>
														</div>
														<div class="row">
															<div class="col-md-9">
																<div class="form-group">
							                                    	<label data-toggle="collapse" data-target="#collapseOne">
													                    <input type="checkbox"/> <strong>Add a Review</strong>	
													                </label>
					                                  			</div>
																
																<div class="panel-collapse collapse in" id="collapseOne">
															  		<div class="panel panel-default">
																		<div class="panel-body writeareview-panel-body">
																		<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" name="rate" value="<?php echo set_value('rate')?>">
																		<br>
																		 <textarea class="form-control" name="comment" value="<?php echo set_value('comment')?>" rows="5" placeholder="Write your review"></textarea>
																        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a>
																		</div>
																	</div>
																</div>
																	<div class="form-group">
															 			<button  type="submit" class="btn btn-primary"> Add a Person</button>
																	</div>
															</div>
														</div>

													</div>
											</div>
										<?php echo form_close();?>
							 		 	</div>
							 		 	
									</div>
									
							<!--- Place Review  -->	
									<div class="tab-pane fade" id="blazers" >
										<div class="col-md-3">
								 		 	 <form action="action_page.php">
												<input list="browsers" name="browser" placeholder="Choose or type country" class="form-control">
												<datalist id="browsers">
												  <option value="United States">
												  <option value="Canada">
												  <option value="United Kingdom">
												  <option value="Australia">
												  <option value="Italy">
												  <option value="Philippines">
												</datalist>
											</form>
								 		 </div>
									 	 <?php echo form_open('writeareview/search');?>
									 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="name" placeholder="Find a Place" required>
							 		 	</div>
							 		 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="place" placeholder="City">
							 		 	</div>
							 		 	<input type="hidden" name="category_id" value="2">
							 		 	<div class="col-md-1">
							 		 		 <button type="submit" id="writeareview-button" class="btn btn-danger"><i class="fa fa-search"></i></button>
							 		 	</div>
							 		 	<?php echo form_close();?>
							 		 	<div class="col-md-12">
							 		 		<div class="panel-heading">
												<h4 class="panel-title">
														<h4 class="writeareview-yournext">No Results Found: </h4>
														<p class="writeareview-iftheperson"> <strong>Suggesstion for improving results</strong></p>
														<p class="writeareview-iftheperson"> Check your search category</p>
														<p class="writeareview-iftheperson"> e.g.  Search a Place in Review a Place Category </p>
														<br>
														<p class="writeareview-nothere">Not here? Tell us what we're missing. <i>Add a Place</i></p>
													<p class="writeareview-iftheperson"> If the Place you're looking for isn't here,
													add it!</p>
												</h4>
											</div>
											<?php echo form_open('writeareview/add');?>
											<div class="col-md-12">
													<div class="panel-body">
														<div class="row">
															 <div class="col-md-5">
															 	<div class="form-group">
								                                    <label for="filter">Country</label>
								                                    <select required name="country" class="form-control">
								                                        <option value="" selected>---</option>
								                                        <option value="United States">United States</option>
								                                        <option value="Canada">Canada</option>
								                                        <option value="Japan">Japan</option>
								                                        <option value="Philippines">Philippines</option>
								                                    </select>
							                                  	</div>

							                                  	<input type="hidden" name="categ_id" value="2">

															 	<div class="form-group">
							                                    	<label for="contain">Place Name</label>
								                                    <input class="form-control" type="text" name="place_name" value="<?php echo set_value('place_name')?>" placeholder="Public Review. Inc" required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Address</label>
								                                    <textarea class="form-control" type="text" name="address" value="<?php echo base_url('address')?>" ></textarea> 
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">City, Prov. & Postal Code</label>
								                                    <input class="form-control" type="text" name="city" value="<?php set_value ('city')?>" required/>
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Phone Number</label>
								                                    <input class="form-control" type="text" name="phone" value="<?php echo set_value('phone')?>" placeholder="(11) 2222-2222" />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Description</label>
								                                    <textarea class="form-control "type="text" name="description" value="<?php echo set_value('description')?>"></textarea>
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Website Address</label>
								                                    <input class="form-control" type="text" name="website" value="<?php echo set_value('website')?>" placeholder="www.publicreview.com" />
							                                  	</div>
															 </div>
															 <div class="col-md-2">
															 	
															 </div>
															 <div class="col-md-5"><br>
															 	<div class="panel panel-default">
															 		<div class="panel-heading">
															 			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15443.793439569683!2d121.00482714999998!3d14.6020176!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1434086085017" width="390" height="340" frameborder="0" style="border:0"></iframe>
															 		</div>
															 	</div>
															 </div>
														</div>
														<div class="row">
															<div class="col-md-9">
																<div class="form-group">
							                                    	<label data-toggle="collapse" data-target="#collapsetwo">
													                    <input type="checkbox"/> <strong>Add a Review</strong>	
													                </label>
					                                  			</div>
																
																<div class="panel-collapse collapse in" id="collapsetwo">
															  		<div class="panel panel-default">
																		<div class="panel-body writeareview-panel-body">
																		<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" name="rate" value="<?php echo set_value('rate')?>" >
																		<br>
																		 <textarea class="form-control" name="comment" value="<?php echo set_value('comment')?>" rows="5" placeholder="Write your review" ></textarea>
																        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a>
																		</div>
																	</div>
																</div>
																	<div class="form-group">
															 			<button  type="submit" class="btn btn-primary"> Add a Place</button>
																	</div>
															</div>
														</div>
													</div>
											</div>
													<?php echo form_close();?>
							 		 	</div>
									</div>

							<!--- Business Review  -->	
									<div class="tab-pane fade" id="sunglass" >
										<div class="col-md-3">
								 		 	 <form action="action_page.php">
												<input list="browsers" name="browser" placeholder="Choose or type country" class="form-control">
												<datalist id="browsers">
												  <option value="United States">
												  <option value="Canada">
												  <option value="United Kingdom">
												  <option value="Australia">
												  <option value="Italy">
												  <option value="Philippines">
												</datalist>
											</form>
								 		 </div>
									  <?php echo form_open('writeareview/search');?>
									 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="name" placeholder="Find a Business" required>
							 		 	</div>
							 		 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="place" placeholder="City">
							 		 	</div>
							 		 	<input type="hidden" name="category_id" value="3">
							 		 	<div class="col-md-1">
							 		 		 <button type="submit" id="writeareview-button" class="btn btn-danger"><i class="fa fa-search"></i></button>
							 		 	</div>
							 		 	<?php echo form_close();?>
							 		 	<div class="col-md-12">
							 		 		<div class="panel-heading">
												<h4 class="panel-title">
														<h4 class="writeareview-yournext">No Results Found: </h4>
														<p class="writeareview-iftheperson"> <strong>Suggesstion for improving results</strong></p>
														<p class="writeareview-iftheperson"> Check your search category</p>
														<p class="writeareview-iftheperson"> e.g.  Search a Business in Review a Business Category </p>
														<br>
														<p class="writeareview-nothere">Not here? Tell us what we're missing. <i>Add a Business</i></p>
													<p class="writeareview-iftheperson"> If the Business you're looking for isn't here,
													add it!</p>
												</h4>
											</div>
											<?php echo form_open('writeareview/add');?>
											<div class="col-md-12">
													<div class="panel-body">
														<div class="row">
															 <div class="col-md-5">
															 	<div class="form-group">
								                                    <label for="filter">Country</label>
								                                    <select required name="country" class="form-control">
								                                        <option value="" selected>----</option>
								                                        <option value="canada">Canada</option>
								                                        <option value="United States">United States</option>
								                                        <option value="Australia">Australia</option>
								                                        <option value="Philippines">Philippines</option>
								                                    </select>
							                                  	</div>
							                                  	<input type="hidden" name="categ_id" value="3">

															 	<div class="form-group">
							                                    	<label for="contain">Business Name</label>
								                                    <input class="form-control" type="text" name="business_name" value="<?php echo set_value('business_name')?>"placeholder="Public Review. Inc" required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Address</label>
								                                    <textarea class="form-control" type="text" name="address" value="<?php echo set_value('address')?>" required></textarea> 
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">City, Prov. & Postal Code</label>
								                                    <input class="form-control" type="text" name="city" value="<?php echo set_value('city')?>" required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Phone Number</label>
								                                    <input class="form-control" type="text" name="phone" value="<?php echo set_value('phone')?>" placeholder="(11) 2222-2222" required />
							                                  	</div>
							                                    	<label for="contain">Description</label>
							                                  		<div class="form-group">
								                                    <textarea class="form-control" type="text" name="description" value="<?php echo set_value('description')?>" required ></textarea> 

							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Website Address</label>
								                                    <input class="form-control" type="text" name="website" value="<?php echo set_value('website')?>" placeholder="publicreview.com" />
							                                  	</div>
															 </div>
															 <div class="col-md-2">
															 	
															 </div>
															 <div class="col-md-5"><br>
															 	<div class="panel panel-default">
															 		<div class="panel-heading">
															 			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15443.793439569683!2d121.00482714999998!3d14.6020176!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1434086085017" width="390" height="340" frameborder="0" style="border:0"></iframe>
															 		</div>
															 	</div>
															 </div>
														</div>
														<div class="row">
															<div class="col-md-9">
																<div class="form-group">
							                                    	<label data-toggle="collapse" data-target="#collapseThree">
													                    <input type="checkbox"/> <strong>Add a Review</strong>	
													                </label>
					                                  			</div>
																
																<div class="panel-collapse collapse in" id="collapseThree">
															  		<div class="panel panel-default">
																		<div class="panel-body writeareview-panel-body">
																		<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" name="rate" value="<?php echo set_value('rate')?>" >
																		<br>
																		 <textarea class="form-control" name="comment" value="<?php echo set_value('comment')?>" rows="5" placeholder="Write your review" ></textarea>
																        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a>
																		</div>
																	</div>
																</div>
																	<div class="form-group">
															 			<button type="submit" class="btn btn-primary"> Add a Business</button>
																	</div>
															</div>
														</div>
													</div>
											</div>
											<?php echo form_close();?>
							 		 	</div>
							 		 	
							 		 </div>	



					 		 <!-- Website Review -->
									
									
									<div class="tab-pane fade" id="kids" >
										<div class="col-md-3">
								 		 	 <form action="action_page.php">
												<input list="browsers" name="browser" placeholder="Choose or type country" class="form-control">
												<datalist id="browsers">
												  <option value="United States">
												  <option value="Canada">
												  <option value="United Kingdom">
												  <option value="Australia">
												  <option value="Italy">
												  <option value="Philippines">
												</datalist>
											</form>
								 		 </div>
									 	<?php echo form_open('writeareview/search');?>
									 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="name" placeholder="Find a Website" required>
							 		 	</div>
							 		 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="place" placeholder="City">
							 		 	</div>
							 		 	<input type="hidden" name="category_id" value="4">
							 		 	<div class="col-md-1">
							 		 		 <button type="submit" id="writeareview-button" class="btn btn-danger"><i class="fa fa-search"></i></button>
							 		 	</div>
							 		 	<?php echo form_close();?>
							 		 	<div class="col-md-12">
							 		 		<div class="panel-heading">
												<h4 class="panel-title">
														<h4 class="writeareview-yournext">No Results Found: </h4>
														<p class="writeareview-iftheperson"> <strong>Suggesstion for improving results</strong></p>
														<p class="writeareview-iftheperson"> Check your search category</p>
														<p class="writeareview-iftheperson"> e.g.  Search a Website in Review a Website Category </p>
														<br>
														<p class="writeareview-nothere">Not here? Tell us what we're missing. <i>Add a Website</i></p>
													<p class="writeareview-iftheperson"> If the Website you're looking for isn't here,
													add it!</p>
												</h4>
											</div>
											<?php echo form_open('writeareview/add');?>
											<div class="col-md-12">
													<div class="panel-body">
														<div class="row">
															 <div class="col-md-5">
															 	<div class="form-group">
								                                    <label for="filter">Country</label>
								                                    <select required name="country" class="form-control">
								                                        <option value="" selected>---</option>
								                                        <option value="United States">United States</option>
								                                        <option value="Canada">Canada</option>
								                                        <option value="Japan">Japan</option>
								                                        <option value="Philippines">Philippines</option>
								                                    </select>
							                                  	</div>

							                                  	<input type="hidden" name="categ_id" value="4">

															 	<div class="form-group">
							                                    	<label for="contain">Website Name</label>
								                                    <input class="form-control" type="text" name="web_name" value="<?php echo set_value('web_name')?>" placeholder="Public Review" required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Category</label>
								                                    <input class="form-control" type="text" name="category" value="<?php set_value ('category')?>" placeholder="ex. Education, Social Media, Music" required/>
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Description</label>
								                                    <textarea class="form-control "type="text" name="description" value="<?php echo set_value('description')?>"></textarea>
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Website Address</label>
								                                    <input class="form-control" type="text" name="website" value="<?php echo set_value('website')?>" placeholder="www.publicreview.com" />
							                                  	</div>
															 </div>
															 <div class="col-md-2">
															 	
															 </div>
															 <div class="col-md-5"><br>
															 	<div class="panel panel-default">
															 		<div class="panel-heading">
															 			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15443.793439569683!2d121.00482714999998!3d14.6020176!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1434086085017" width="390" height="340" frameborder="0" style="border:0"></iframe>
															 		</div>
															 	</div>
															 </div>
														</div>
														<div class="row">
															<div class="col-md-9">
																<div class="form-group">
							                                    	<label data-toggle="collapse" data-target="#collapseFour">
													                    <input type="checkbox"/> <strong>Add a Review</strong>	
													                </label>
					                                  			</div>
																
																<div class="panel-collapse collapse in" id="collapseFour">
															  		<div class="panel panel-default">
																		<div class="panel-body writeareview-panel-body">
																		<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" name="rate" value="<?php echo set_value('rate')?>" required>
																		<br>
																		 <textarea class="form-control" name="comment" value="<?php echo set_value('comment')?>" rows="5" placeholder="Write your review" required></textarea>
																        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a>
																		</div>
																	</div>
																</div>
																	<div class="form-group">
															 			<button  type="submit" class="btn btn-primary"> Add a Website</button>
																	</div>
															</div>
														</div>
													</div>
											</div>
													<?php echo form_close();?>
							 		 	</div>
									</div>


								<!-- Things Review -->		

									<div class="tab-pane fade" id="poloshirt" >
										<div class="col-md-3">
								 		 	 <form action="action_page.php">
												<input list="browsers" name="browser" placeholder="Choose or type country" class="form-control">
												<datalist id="browsers">
												  <option value="United States">
												  <option value="Canada">
												  <option value="United Kingdom">
												  <option value="Australia">
												  <option value="Italy">
												  <option value="Philippines">
												</datalist>
											</form>
								 		 </div>
									 <?php echo form_open('writeareview/search');?>
									 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="name" placeholder="Find a thing" required>
							 		 	</div>
							 		 	<div class="col-md-4">
							 		 		<input type="text" class="form-control" name="place" placeholder="City">
							 		 	</div>
							 		 	<input type="hidden" name="category_id" value="5">
							 		 	<div class="col-md-1">
							 		 		 <button type="submit" id="writeareview-button" class="btn btn-danger"><i class="fa fa-search"></i></button>
							 		 	</div>
							 		 	<?php echo form_close();?>
							 		 	<div class="col-md-12">
							 		 		<div class="panel-heading">
												<h4 class="panel-title">
														<h4 class="writeareview-yournext">No Results Found: </h4>
														<p class="writeareview-iftheperson"> <strong>Suggesstion for improving results</strong></p>
														<p class="writeareview-iftheperson"> Check your search category</p>
														<p class="writeareview-iftheperson"> e.g.  Search a Things in Review a Things Category </p>
														<br>
														<p class="writeareview-nothere">Not here? Tell us what we're missing. <i>Add a Things</i></p>
													<p class="writeareview-iftheperson"> If the Things you're looking for isn't here,
													add it!</p>
												</h4>
											</div>
											<?php echo form_open('writeareview/add');?>
											<div class="col-md-12">
													<div class="panel-body">
														<div class="row">
															 <div class="col-md-5">
															 	<div class="form-group">
								                                    <label for="filter">Country</label>
								                                    <select required name="country" class="form-control">
								                                        <option value="" selected>---</option>
								                                        <option value="United States">United States</option>
								                                        <option value="Canada">Canada</option>
								                                        <option value="Japan">Japan</option>
								                                        <option value="Philippines">Philippines</option>
								                                    </select>
							                                  	</div>

							                                  	<input type="hidden" name="categ_id" value="5">

															 	<div class="form-group">
							                                    	<label for="contain">Things Name</label>
								                                    <input class="form-control" type="text" name="th_name" value="<?php echo set_value('th_name')?>" placeholder="Public Review" required />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Category</label>
								                                    <input class="form-control" type="text" name="category" value="<?php set_value ('category')?>" placeholder="ex. Metal, Paper, Ball, etc." required/>
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Sub-Category (Optional)</label>
								                                    <input class="form-control" type="text" name="sub_category" value="<?php set_value ('sub_category')?>" placeholder="ex. Science, Fiction, Air, etc." />
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Description</label>
								                                    <textarea class="form-control "type="text" name="description" value="<?php echo set_value('description')?>"></textarea>
							                                  	</div>
							                                  	<div class="form-group">
							                                    	<label for="contain">Website (Optional)</label>
								                                    <input class="form-control" type="text" name="website" value="<?php set_value ('website')?>" placeholder="www.publicreview.com" />
							                                  	</div>
															 </div>
															 <div class="col-md-2">
															 	
															 </div>
															 <div class="col-md-5"><br>
															 	<div class="panel panel-default">
															 		<div class="panel-heading">
															 			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15443.793439569683!2d121.00482714999998!3d14.6020176!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1434086085017" width="390" height="340" frameborder="0" style="border:0"></iframe>
															 		</div>
															 	</div>
															 </div>
														</div>
														<div class="row">
															<div class="col-md-9">
																<div class="form-group">
							                                    	<label data-toggle="collapse" data-target="#collapseFive">
													                    <input type="checkbox"/> <strong>Add a Review</strong>	
													                </label>
					                                  			</div>
																
																<div class="panel-collapse collapse in" id="collapseFive">
															  		<div class="panel panel-default">
																		<div class="panel-body writeareview-panel-body">
																		<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" name="rate" value="<?php echo set_value('rate')?>" required>
																		<br>
																		 <textarea class="form-control" name="comment" value="<?php echo set_value('comment')?>" rows="5" placeholder="Write your review" required></textarea>
																        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a>
																		</div>
																	</div>
																</div>
																	<div class="form-group">
															 			<button  type="submit" class="btn btn-primary"> Add a Thing</button>
																	</div>
															</div>
														</div>
													</div>
											</div>
													<?php echo form_close();?>
							 		 	</div>
									</div>
									
								</div>
							</div><!--/category-tab-->
	 		 			</div>
	 		 			<div class="row">
	 		 				<div class="col-md-12">
	 		 					
	 		 				</div>
	 		 			</div>
			 		</div>
			 	</div>
			 </div>
		</div>
	</div>
</section>
<br><br><br>

<?php $this->load->view('includes/footer-design');?>

<?php $this->load->view('includes/footer');?>